<template>
    <div class="box box-primary">
        <div class="box-body">
            <h1 class="pull-right">
                <button class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" @click.prevent="saveIctSupportStaffs()">Add ICT Support Staff</button>
            </h1>
            <div id="dataTableBuilder_filter" class="dataTables_filter"><label>Search:<input type="search" v-model="searchQuery" class="form-control input-sm pull-left" placeholder="" aria-controls="dataTableBuilder"></label></div>

            <div class="row">
                <div class="col-md-12">

                    <table  v-if="all_staffs.length" class="table table-responsive table-striped table-bordered">
                        <thead>
                        <th>Select</th>
                        <th>Staff Name</th>
                        <th>Email</th>
                        <th>Department</th>
<!--                        <th>ICT Staff</th>-->
                        </thead>
                        <tbody>
                        <tr v-for="staff in resultQuery">
                            <td><input type="checkbox" @change="addIctStaff(staff)"></td>
                            <td>{{staff.name}}</td>
                            <td>{{staff.email}}</td>
                            <td>{{staff.department_id}}</td>
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
                                @click="getHrStaffList(links.prev)">Previous</a>
                            </li>
                            <li class="paginate_button active"><a href="#" aria-controls="dataTableBuilder" data-dt-idx="1"
                                                                  tabindex="0">{{meta.current_page}}</a></li>
                            <li class="paginate_button next pointed" id="dataTableBuilder_next"><a
                                @click="getHrStaffList(links.next)">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>
<script>
    export default {
        data(){
            return {
                all_staffs: [],
                selected_staffs: [],
                name: null,
                email: null,
                ict_staff: null,
                department_id: null,
                links: {},
                api: '/hr-staff-list',
                meta: {},
                index : 1,
                searchQuery: null,

            }

        },

        computed: {
            statusArr() {
                return this.selected_staffs;
            },
            resultQuery(){
                if(this.searchQuery){
                    return this.all_staffs.filter((staff)=>{
                        return this.searchQuery.toLowerCase().split(' ').every(v => staff.name.toLowerCase().includes(v))
                    })
                }else{
                    return this.all_staffs;
                }
            }
        },
        methods: {
            getHrStaffList(api) {
                axios.get(api).then(response => {
                    this.all_staffs = response.data.data;
                    this.links = response.data.links;
                    this.meta = response.data.meta;
                }).catch(err => {
                    console.log(err)
                })
            },
            fetchStaffs() {
                this.getHrStaffList(this.api);
            },
            addIctStaff(staff) {
                this.selected_staffs.push(staff)
            },
            saveIctSupportStaffs(){
                axios.post('/ict-staffs',this.selected_staffs).then((response)=>{
                    // console.log(response.data);
                }).catch(err => {
                    console.log(err)
                })
                return window.location = window.location;
            }
        },
        created() {
            this.fetchStaffs();

        }

    }

</script>
