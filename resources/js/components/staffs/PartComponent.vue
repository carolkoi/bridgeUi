<template>
    <div class="box box-primary">
        <h3 class="pull-left">Part Issuance Form</h3>
        <div class="box-body">

            <div class="row">
                <div class="col-md-12">

                    <div class="card-body">
                        <table>

                            <tr v-for="(item,k) in selectedItems" :key="k">
                                <td style="padding:0 15px 0 15px;">
<!--                                    <div class="form-group col-md-3" >-->
                                        <label>Select Part:</label>
                                        <select class='form-control col-md-3' v-model='item.part' @change="item_id = item.part">
                                            <option v-for='item in items' :value='item.id'>{{ item.name }}</option>
                                        </select>
<!--                                    </div>-->
                                </td>

                        <td style="padding:0 15px 0 15px;">
<!--                            <div class="form-group col-md-3">-->
                                <label>Select Category:</label>
                                <select class='form-control col-md-3' v-model='item.category'>
                                    <option v-for='asset in assets' :value='asset.id'>{{ asset.name }}</option>
                                </select>
<!--                            </div>-->
                        </td>
                                <td style="padding:0 10px 0 10px;">
<!--                                    <div class="form-group col-md-3">-->
                                        <label>Required Quantity</label>
                                        <input class="form-control" v-model="item.qty"
                                               type="number" min="1">
<!--                                    </div>-->
                                </td>
                                <td style="padding:0 10px 0 10px;">
<!--                                    <div class="form-group col-md-3">-->
                                        <label>Available Quantity</label>
                                        <input class="form-control " v-model="item.qty_available"
                                               type="number" readonly="readonly">
<!--                                    </div>-->
                                </td>
                                <td style="padding:0 10px 0 10px;">
<!--                                    <label>Actions</label>-->
                                    <span class="fa fa-plus-circle" @click="addItem(k)" v-show="k == selectedItems.length-1"></span>
                                    <span class="fa fa-minus-circle" v-show="k || (!k && selectedItems.length > 1)" @click="removeItem(k)"></span>
                                </td>

                            </tr>
                     </table>
                    </div>
<!--                                                            <h2>-->
<!--                                                                Derived output-->
<!--                                                            </h2>-->
<!--                                         <pre>{{statusArr}}</pre>-->
                    <h1 class="pull-left">
                        <button class="btn btn-primary pull-right" id="request_part_id" style="margin-top: -10px;margin-bottom: 5px" @click.prevent="requestParts()">Request Parts</button>
                    </h1>


                </div>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props:['data'],
        data(){
            return {
                item: 0,
                items: [],
                asset: 0,
                assets: [],
                selectedItems: [{part:'',category:'',qty:'',qty_available: ''}],
                name: null,
                qty_available: null,
                item_api: '/tickets-parts',
                asset_api: '/tickets-assets',
                item_id:'',
                id:''


            }

        },
        watch:{
               ticketItems(){
                if(this.item_id){
                                      for(let i =0;i<this.selectedItems.length;i++){
                            if (this.selectedItems[i]['part'] ==  this.item_id){
                                this.selectedItems[i]['qty_available'] = this.items.find(item => item.id == this.item_id).qty_available
                            }
                        }
                }
               },

        },

        computed:{
            statusArr() {
                return this.selectedItems;
            },
         ticketItems(){
             return [this.item_id,this.selectedItems].join();
         },
            ticketCategory(){
                return [this.asset_id,this.selectedItems].join();
            },
            partQuantity(){
             return [this.quantity, this.selectedItems].join();
            }
        },
        methods: {
            addItem(k){
              this.selectedItems.push({part:'',category:'',qty:'',qty_available: ''})
            },
            removeItem(k){
              this.selectedItems.splice(k,1);
            },
            getItems(item_api) {
                axios.get(item_api).then(response => {
                    this.items = response.data.data;
                }).catch(err => {
                    console.log(err)
                })
            },
            getAssets(asset_api) {
                axios.get(asset_api).then(response => {
                    this.assets = response.data.data;
                }).catch(err => {
                    console.log(err)
                })
            },
            fetchMaterials() {
                this.getItems(this.item_api);
                this.getAssets(this.asset_api);
            },

            requestParts(){
               // return  console.log(JSON.stringify(this.selectedItems));
                console.log(this.selectedItems);
                axios.post('/issue-parts/' + this.data,{'selectedItems':this.selectedItems}).then((response)=>{
                }).catch(err => {
                    console.log(err)
                })
                // return window.location = window.location;
            }
        },
        created() {
            this.fetchMaterials();

        }

    }

</script>
