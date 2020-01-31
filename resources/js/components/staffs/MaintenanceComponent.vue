<template>
    <div class="box box-primary">
        <h3 class="pull-left">Part Issuance Form</h3>
        <div class="box-body">

            <div class="row">
                <div class="col-md-12">

                    <div class="card-body">
                        <table>
                            <h3>Asset Details</h3>

                            <tr>
                                <td style="padding:0 10px 0 10px;">
                                    <!--                                    <div class="form-group col-md-3">-->
                                    <label>Make</label>
                                    <input class="form-control" v-model=""
                                           type="text" min="1">
                                    <!--                                    </div>-->
                                </td>
                                <td style="padding:0 10px 0 10px;">
                                    <!--                                    <div class="form-group col-md-3">-->
                                    <label>Model</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                    <!--                                    </div>-->
                                </td>

                                <td style="padding:0 10px 0 10px;">
                                    <!--                                    <div class="form-group col-md-3">-->
                                    <label>Part Number</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                    <!--                                    </div>-->
                                </td>

                            </tr>
                            <tr>
                                <td style="padding:0 15px 0 15px;">
                                    <!--                                    <div class="form-group col-md-3" >-->
                                    <label>Category:</label>
                                    <select class='form-control col-md-3' v-model='' @change="">
                                        <option></option>
                                    </select>
                                    <!--                                    </div>-->
                                </td>

                                <td style="padding:0 15px 0 15px;">
                                    <label>Serial Number:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>

                            </tr>
                            <h3>Component Details</h3>
                            <tr>
                                <td style="padding:0 15px 0 15px;">
                                    <label>Type:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>
                                <td style="padding:0 15px 0 15px;">
                                    <label>Make:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>
                                <td style="padding:0 15px 0 15px;">
                                    <label>Model:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>

                            </tr>
                            <tr>
                                <td style="padding:0 15px 0 15px;">
                                    <label>size:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>
                                <td style="padding:0 15px 0 15px;">
                                    <label>Part Number:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>
                                <td style="padding:0 15px 0 15px;">
                                    <label>Serial Number:</label>
                                    <input class="form-control " v-model=""
                                           type="text">
                                </td>

                            </tr>
                            <tr>
                                <td style="padding:0 15px 0 15px;">
                                    <!--                                    <div class="form-group col-md-3" >-->
                                    <label>Department:</label>
                                    <select class='form-control col-md-3' v-model='' @change="">
                                        <option></option>
                                    </select>
                                    <!--                                    </div>-->
                                </td>
                                <td>
                                    <label>Commission Date:</label>
                                    <input class="form-control " v-model=""
                                           type="date">
                                </td>
                                <td style="padding:0 15px 0 15px;">
                                    <label>De-Commission Date:</label>
                                    <input class="form-control " v-model=""
                                           type="date">
                                </td>
                                <td style="padding:0 15px 0 15px;">
                                    <label>De-Commission Reminder Date:</label>
                                    <input class="form-control " v-model=""
                                           type="date">
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
        // props:['data'],
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


    }

</script>
