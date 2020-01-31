<template>

<!--            <h1 class="pull-right">-->
<!--                <button class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" @click.prevent="saveIctSupportStaffs()">Add ICT Support Staff</button>-->
<!--            </h1>-->
<!--            <div id="dataTableBuilder_filter" class="dataTables_filter"><label>Search:<input type="search" v-model="searchQuery" class="form-control input-sm pull-left" placeholder="" aria-controls="dataTableBuilder"></label></div>-->

            <div class="row">
                <div class="col-md-12">

                    <table  v-if="checklists.length" class="table table-responsive table-striped table-bordered">
                        <thead>
                        <th>Check</th>
                        <th>Actions</th>
                        <th>Comment</th>
<!--                        <th>Maintenance Schedule Name</th>-->
                        <!--                        <th>ICT Staff</th>-->
                        </thead>
                        <tbody>
                        <tr v-for="checklist in checklists">
                            <td><input type="checkbox" @change="checkedActions(checklist)"></td>
                            <td>{{checklist.action}}</td>
                            <td><textarea></textarea></td>
<!--                            <td>{{checklist.maintenance_schedule_id}}</td>-->
                            <!--                            <td>{{staff.ict_staff}}</td>-->
                            <!--                            <td><input type="number" @keyup="updateOrderItem(item, $event.target.value)"></td>-->
                        </tr>
                        </tbody>

                    </table>
                    <!--                                        <h2>-->
                    <!--                                            Derived output-->
                    <!--                                        </h2>-->
                    <!--                                        <pre>{{statusArr}}</pre>-->


                    <div class="dataTables_paginate paging_simple_numbers" id="dataTableBuilder_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous pointed" id="dataTableBuilder_previous"><a
                                @click="getAllChecklists(links.prev)">Previous</a>
                            </li>
                            <li class="paginate_button active"><a href="#" aria-controls="dataTableBuilder" data-dt-idx="1"
                                                                  tabindex="0">{{meta.current_page}}</a></li>
                            <li class="paginate_button next pointed" id="dataTableBuilder_next"><a
                                @click="getAllChecklists(links.next)">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

</template>
<script>
    export default {
        props:['data'],
        data(){
            return {
                checklists: [],
                selectedChecklist: [],
                action: null,
                comment: null,
                checkedActions: null,
                maintenance_schedule_id: null,
                links: {},
                api: '/maintenance-checklist',
                meta: {},
                index : 1,
                searchQuery: null,

            }

        },

        // computed: {
        //     statusArr() {
        //         return this.selected_staffs;
        //     },
        //     resultQuery(){
        //         if(this.searchQuery){
        //             return this.all_staffs.filter((staff)=>{
        //                 return this.searchQuery.toLowerCase().split(' ').every(v => staff.name.toLowerCase().includes(v))
        //             })
        //         }else{
        //             return this.all_staffs;
        //         }
        //     }
        // },
        methods: {
            getAllChecklists(api) {
                axios.get(api).then(response => {
                    this.checklists = response.data.data;
                    this.links = response.data.links;
                    this.meta = response.data.meta;
                }).catch(err => {
                    console.log(err)
                })
            },
            fetchChecklists() {
                this.getAllChecklists(this.api);
            },
            // checkedActions(staff) {
            //     this.selected_staffs.push(staff)
            // },
            // saveIctSupportStaffs(){
            //     axios.post('/ict-staffs',this.selected_staffs).then((response)=>{
            //         // console.log(response.data);
            //     }).catch(err => {
            //         console.log(err)
            //     })
            //     return window.location = window.location;
            // }
        },
        created() {
            this.fetchChecklists();

        }

    }

</script>
