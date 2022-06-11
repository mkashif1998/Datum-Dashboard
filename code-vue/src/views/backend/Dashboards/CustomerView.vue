<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                   <div class="d-flex align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><router-link :to="{name: 'layout.customer'}" class="">Customers</router-link></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer View</li>
                            </ol>
                        </nav>
                    </div>                                   
                </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="font-weight-bold d-flex align-items-center">Customer View</h4>
                <router-link :to="{name: 'layout.customer'}" class="btn btn-primary btn-sm d-flex align-items-center justify-content-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2">Back</span>
                </router-link>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div>
                                <ul class="list-style-1 mb-0">
                                    <li class="list-item d-flex justify-content-start align-items-center">
                                        <div class="avatar">
                                            <img class="avatar avatar-img avatar-60 rounded-circle" src="~@/assets/images/user/1.jpg" alt="01.jpg" />                        
                                        </div>
                                        <div class="list-style-detail ml-4 mr-2">
                                            <h5 class="font-weight-bold">Kate Smith</h5>
                                            <p class="mb-0 mt-1 text-muted">Botsford and Sons</p>
                                        </div>                                        
                                    </li>
                                </ul>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 text-center mb-2">
                                    <button class="btn btn-block btn-sm btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                        </svg>
                                        <span class="">Message</span>
                                    </button>
                                </div>
                                <div class="col-6 text-center">
                                    <button class="btn btn-block btn-sm btn-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                        <span class="">Edit Profile</span>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <table class="table table-borderless mb-0">
                                <tr>
                                    <td class="p-0">
                                        <p class="mb-0 text-muted">Email ID</p>                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 ">kate@yahoo.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0">
                                        <p class="mb-0 text-muted">Birthday</p>                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 ">01 Feb 1990</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0">
                                        <p class="mb-0 text-muted">Phone</p>                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 ">+99 8756214524</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0">
                                        <p class="mb-0 text-muted">Country</p>                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 ">USA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0">
                                        <p class="mb-0 text-muted">State/Region</p>                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 ">West Virginia</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0">
                                        <p class="mb-0 text-muted">Address</p>                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 ">Baker Street, no. 7</p>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="list-group-item">
                            <h6 class="font-weight-bold">Total Spending</h6>
                            <ApexChart element="chart-1" :chartOption="chart1" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-0">
                        <div>
                            <tab-nav :pills="false" id="pills-tab" class="nav nav-tabs d-flex flex-wrap pt-2 mb-0">
                                <tab-nav-items :active="true" class="nav-item font-weight-bold text-uppercase px-5 active" id="pills-invoice" href="#pills-invoice" ariaControls="pills-invoice" role="tab" :ariaSelected="true">
                                    <template v-slot:title>
                                        INVOICE
                                    </template>
                                </tab-nav-items>
                                <tab-nav-items :active="false" class="nav-item font-weight-bold text-uppercase px-5" id="pills-activity" href="#pills-activity" ariaControls="pills-activity" role="tab" :ariaSelected="false">
                                    <template v-slot:title>
                                    ACTIVITY
                                    </template>
                                </tab-nav-items>
                            </tab-nav>
                        </div>
                        <div>
                        <tab-content>
                            <tab-content-item :active="true" id="pills-invoice" aria-labelled-by="pills-invoice"> 
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5>Invoice List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                            Export
                                    </button>
                                </div>
                                <div class="d-flex justify-content-between row p-2">
                                    <div class="col-sm-12 col-md-6 d-flex align-items-center">                                      
                                            <div>Show</div>
                                            <div class="px-1">
                                                <select class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">55</option>
                                                        <option value="100">100</option>
                                                </select> 
                                            </div>
                                            <div>entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end">
                                            <div>
                                                Search: 
                                                <input type="text" aria-describedby="textHelp">
                                            </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-muted">
                                            <th scope="col">ID</th>
                                            <th scope="col">Date </th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(customer,index) in customers" :key="index">
                                                <td>{{customer.ID}}</td>
                                                <td>{{customer.date}}</td>
                                                <td>
                                                    {{customer.desc}}
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                                        <small><small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                                                                    <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                                                                    </small></small>{{customer.status}}
                                                    </p>
                                                </td>
                                                <td class="text-right">{{customer.total}}</td>
                                            </tr>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </tab-content-item>
                            <tab-content-item :active="false" id="pills-activity" aria-labelled-by="pills-activity">
                                <h3 class="mb-3">Activity</h3>
                                <div class="iq-timeline0 m-0 d-flex align-items-center justify-content-between position-relative">
                                    <ul class="list-inline p-0 m-0">
                                        <li>
                                            <div class="pt-3">
                                                <p class="mb-0 text-muted font-weight-bold text-uppercase">13, September 2020</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                            <h6 class="float-left mb-1 font-weight-bold">Signed Out</h6>                                            
                                            <div class="d-inline-block w-100">
                                                <p class="mb-0">Santander crea una sociedad para gestionar las sucursales que cierra</p>
                                                <div class="d-inline-block w-100">
                                                    <p>Probablemente, la bodega más sostenible de españa</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                            <h6 class="float-left mb-1 font-weight-bold">Create Invoice IN-302240</h6>
                                            <div class="d-inline-block w-100">
                                                <p>Repsol sopesa elegir primero un socio para su área de renovables y después sacarla a Bolsa</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                            <h6 class="float-left mb-1 font-weight-bold">Signed In</h6>
                                            <div class="d-inline-block w-100">
                                                <p>El Ibex busca nuevos máximos en la última jornada de abril</p>
                                            </div>
                                            <div class="pt-3">
                                                <p class="mb-0 text-muted font-weight-bold text-uppercase">14, September 2020</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                            <h6 class="float-left mb-1 font-weight-bold">Signed Out</h6>                                            
                                            <div class="d-inline-block w-100">
                                                <p>Ecoener se atreve con la Bolsa y se estrenará con una valoración de 336 millones</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                            <h6 class="float-left mb-1 font-weight-bold">Create Invoice IN-662210</h6>
                                            <div class="d-inline-block w-100">
                                                <p class="mb-0">BBVA supera la crisis del Covid y gana 1.210 millones en el primer trimestre</p>
                                            </div>
                                            <div class="d-inline-block w-100">
                                                <p>Probablemente, la bodega más sostenible de españa</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                            <h6 class="float-left mb-1 font-weight-bold">Signed In</h6>
                                            <div class="d-inline-block w-100">
                                                <p class="mb-0">El mercado se prepara para una corrección en mayo tras el rally bursátil</p>
                                            </div>
                                            <div class="d-inline-block w-100">
                                                <p>Repsol sopesa elegir primero un socio para su área de renovables y después sacarla a Bolsa</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </tab-content-item>
                        </tab-content>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ApexChart from '../../../components/charts/ApexChart'
export default{
    name: 'CustomerView',
    components: {
        ApexChart
    },
    data(){
        return{
            chart1: {
                series: [{
                data: [91, 82, 90, 88, 105, 99]
                }],
                chart: {
                height: 265,
                type: 'bar',
                toolbar:{
                    show: false,
                },
                events: {
                    click: function(chart, w, e) {
                        console.log(chart, w, e)
                    }
                }
                },        
                plotOptions: {
                bar: {
                    columnWidth: '35%',
                    distributed: true,
                }
                },
                dataLabels: {
                enabled: false
                },
                grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: true
                    }
                }
                },
                legend: {
                show: false
                },
                yaxis: {
                labels: {
                offsetY:0,
                minWidth: 20,
                maxWidth: 20
                },
                },
                xaxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'June', 
                ],
                labels: {
                    minHeight: 22,
                    maxHeight: 22,
                    style: {              
                    fontSize: '12px'
                    }
                }
                }
            },
            customers: [
                {
                    ID: 'IN-120010', 
                    date: '23 Jan 2020', 
                    desc: 'Order OR-965508',
                    status: 'Paid',
                    total: '$6,325.99'
                },
                {
                    ID: 'IN-125623', 
                    date: '16 Jan 2020', 
                    desc: 'Order OR-325548',
                    status: 'Completed',
                    total: '$65.00'
                },
                {
                    ID: 'IN-302240', 
                    date: '15 Jan 2020', 
                    desc: 'Order OR-654412',
                    status: 'Paid',
                    total: '$699.00'
                },
                {
                    ID: 'IN-552149', 
                    date: '15 Jan 2020', 
                    desc: 'Order OR-568842',
                    status: 'Pending',
                    total: '$99.98'
                },
                {
                    ID: 'IN-662210', 
                    date: '26 Jan 2020', 
                    desc: 'Order OR-965508',
                    status: 'Cancelled',
                    total: '$150.03'
                },
                {
                    ID: 'IN-901020', 
                    date: '22 Jan 2020', 
                    desc: 'Order OR-500008',
                    status: 'Paid',
                    total: '$449.00'
                },
                {
                    ID: 'IN-902210', 
                    date: '19 Jan 2020', 
                    desc: 'Order OR-595508',
                    status: 'Paid',
                    total: '$199.99'
                },
                {
                    ID: 'IN-902445', 
                    date: '20 Jan 2020', 
                    desc: 'Order OR-884155',
                    status: 'Pending',
                    total: '$99.99'
                },
                {
                    ID: 'IN-902559', 
                    date: '	12 Jan 2020', 
                    desc: 'Order OR-561488',
                    status: 'Paid',
                    total: '$104.98'
                },
                {
                    ID: 'IN-9036510', 
                    date: '	22 Jan 2020', 
                    desc: 'Order OR-489523',
                    status: 'Cancelled',
                    total: '$1,299.05'
                }
            ]

        }
    }
}
</script>

