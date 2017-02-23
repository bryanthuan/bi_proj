<template>
    <div>
        <div class="row">
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <label for="product">Products</label> 
                    <select name="product" class="custom-select" v-model="product">
                        <option value="Actemra">Actemra</option>
                        <option value="Enbrel">Enbrel</option>
                        <option value="Remicade">Remicade</option>
                        <option value="Simponi">Simponi</option>
                    </select>
                    <button @click="load">Load</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <label for="doctor">Doctors</label> 
                    <select name="doctor" class="custom-select">
                        <option value="Actemra">Actemra</option>
                        <option value="Enbrel">Enbrel</option>
                        <option value="Remicade">Remicade</option>
                        <option value="Simponi">Simponi</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <label for="doctor">Something Else</label> 
                    <select name="doctor" class="custom-select">
                        <option value="Actemra">Actemra</option>
                        <option value="Enbrel">Enbrel</option>
                        <option value="Remicade">Remicade</option>
                        <option value="Simponi">Simponi</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <label for="doctor">Something Else</label> 
                    <select name="doctor" class="custom-select">
                        <option value="Actemra">Actemra</option>
                        <option value="Enbrel">Enbrel</option>
                        <option value="Remicade">Remicade</option>
                        <option value="Simponi">Simponi</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <!--earning graph start-->
            <section class="panel">
                <header class="panel-heading">
                   {{product}} Recall <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="panel-body">
                    <div id="graph-area" class="main-chart">
                        <figure><chart :options="recallBar" ref="recallBar" auto-resize></chart></figure>
                    </div>
                </div>
            </section>
            <!--earning graph end-->
        </div>
        <div class="col-md-8">
            <!--earning graph start-->
            <section class="panel">
                <header class="panel-heading">
                 {{product}} - By Territory<span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="panel-body">

                    <div id="graph-area" class="main-chart">
                        <figure><chart :options="recallTerritoryBar" ref="recallTerritoryBar" auto-resize></chart></figure>
                    </div>
                </div>
            </section>
            <!--earning graph end-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <!--earning graph start-->
            <section class="panel">
                <header class="panel-heading">
                 {{product}} - Materials Used<span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="panel-body">

                    <div id="graph-area" class="main-chart">
                        <figure><chart :options="materialsBar" ref="materialsBar" auto-resize></chart></figure>
                    </div>
                </div>
            </section>
            <!--earning graph end-->
        </div>
        <div class="col-md-8">
            <!--earning graph start-->
            <section class="panel">
                <header class="panel-heading">
                  {{product}} - Discussion Length <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="panel-body">

                    <div id="graph-area" class="main-chart">
                        <figure><chart :options="discLengthBar" ref="discLengthBar" auto-resize></chart></figure>
                    </div>
                </div>
            </section>
            <!--earning graph end-->
        </div>
    </div>
    </div>
</template>
<script>
    import 'echarts-liquidfill';
    import 'echarts/lib/chart/bar';
    import 'echarts/lib/component/tooltip';
    import 'echarts/theme/dark'
    //import {initial as barInit} from '../chart_data/bar.js';

    export default {
        data() {
            return {
                recallBar: {
                        title: {
                        
                        },
                        tooltip: {},
                        legend: {
                            data: ["Actemra"]
                        },
                        xAxis: {
                            data: ["1st Spontaneous","Other Spontaneous","Prompted","No Recall"]
                        },
                        yAxis:  {
                            type: 'value',
                            name: '',
                            min: 0,
                            max: 100,
                            axisLabel: {
                                formatter: '{value} %'
                            }
                        },
                        series: [{
                            name: 'Actemra',
                            type: 'bar',
                            barWidth: '60%',
                            data: [],
                        }]
                    },
                    discLengthBar: {
                        title: {
                    
                        },
                        tooltip: {},
                        legend: {
                            data: ["Actemra"]
                        },
                        xAxis: {
                            data: ["Less than 5 minutes","5 minutes","10 minutes","12 minutes",'14 minutes','15 minutes','20 minutes','25 minutes']
                        },
                        yAxis:  {
                            type: 'value',
                            name: '',
                            axisLabel: {
                                formatter: '{value} %'
                            }
                        },
                        series: [{
                            name: 'Actemra',
                            type: 'bar',
                            barWidth: '30%',
                            data: [],
                        }]
                    },
                    materialsBar: {
                        title: {
                        },
                        tooltip: {},
                        legend: {
                            data: ["Actemra"]
                        },
                        xAxis: {
                            data: ["Paper-based","Laptop","iPad","Verbal only"]
                        },
                        yAxis:  {
                            type: 'value',
                            name: '',
                            axisLabel: {
                                formatter: '{value} %'
                            }
                        },
                        series: [{
                            name: 'Actemra',
                            type: 'bar',
                            barWidth: '40%',
                            data: [],
                        }]
                    },
                    recallTerritoryBar: {
                        title: {
                        },
                        tooltip: {},
                        grid: {
                                left: '3%',
                                right: '4%',
                                bottom: '3%',
                                containLabel: true
                            },
                        legend: {
                            data:['1st Spontaneous','Other Spontaneous','Prompted','No Recall']
                        },
                        xAxis: {
                            data: []
                        },
                        yAxis: {
                            axisLabel: {show: true}
                        },
                        series: [{
                            name: 'Actemra',
                            type: 'bar',
                            barWidth: '40%',
                            data: [],
                        }]
                    },
                seconds: -1,
                product:'Actemra',
            }
        },
        methods: {
            load(){
                let recallBar = this.$refs.recallBar;
                let discLengthBar = this.$refs.discLengthBar;
                let materialsBar = this.$refs.materialsBar;
                let recallTerritoryBar = this.$refs.recallTerritoryBar;
                let self=this;
                axios.get('/data')
                    .then(function (response) {


                        let mart=response.data;
                        let d1=mart.filter(function(item){
                            return item.q1_product_dc_lw==="1";
                        });

                        let d2=mart.filter(function(item){
                            return item.q1_product_dc_lw!=="1";
                        });                    
                        let a=d1.length/mart.length;
                        let b=d2.length/mart.length;
                        a=Math.round(a*100);
                        b=Math.round(b*100);
                        let async = {
                            series: [{
                                name: 'Recall',
                                label: {
                                        normal: {
                                            show: true,
                                            position: 'top',
                                            formatter: (a)=>{
                                                return a.data+ '%'
                                            },
                                        }
                                },
                                data: [a,b,'-','-']
                            }]
                        };
                        recallBar.mergeOptions(async);


                        let m0=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)<5;
                        });
                        let m5=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc) ==5;
                        });
                        let m10=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)==10;
                        });
                        let m12=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)==12;
                        });
                        let m14=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)==14;
                        });
                        let m15=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)==15;
                        });
                        let m20=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)==20;
                        });

                        let m25=mart.filter(function(item){
                            return parseInt(item.q9_1_lengh_of_disc)==25;
                        });

                        discLengthBar.mergeOptions({
                            series: [{
                                name: 'Discuss Length',
                                label: {
                                        normal: {
                                            show: true,
                                            position: 'top',
                                            formatter: (a)=>{
                                                return a.data+ '%'
                                            },
                                        }
                                    },
                                data: [
                                        Math.round((m0.length/mart.length)*100),
                                        Math.round((m5.length/mart.length)*100),
                                        Math.round((m10.length/mart.length)*100),
                                        Math.round((m12.length/mart.length)*100),
                                        Math.round((m14.length/mart.length)*100),
                                        Math.round((m15.length/mart.length)*100),
                                        Math.round((m20.length/mart.length)*100),
                                        Math.round((m25.length/mart.length)*100),
                                    ]
                            }]
                        });

                        //materialsBar
                        let mt11=mart.filter(function(item){
                            return item.q8_1_material_used_1st==="1";
                        });
                        let mt12=mart.filter(function(item){
                            return item.q8_1_material_used_2st==="1";
                        });
                        let mt13=mart.filter(function(item){
                            return item.q8_1_material_used_3st==="1";
                        });

                        let mt21=mart.filter(function(item){
                            return item.q8_1_material_used_1st==="2";
                        });
                        let mt22=mart.filter(function(item){
                            return item.q8_1_material_used_2st==="2";
                        });
                        let mt23=mart.filter(function(item){
                            return item.q8_1_material_used_3st==="2";
                        });

                        let mt31=mart.filter(function(item){
                            return item.q8_1_material_used_1st==="3";
                        });
                        let mt32=mart.filter(function(item){
                            return item.q8_1_material_used_2st==="3";
                        });
                        let mt33=mart.filter(function(item){
                            return item.q8_1_material_used_3st==="3";
                        });
                        
                        let mt41=mart.filter(function(item){
                            return item.q8_1_material_used_1st==="4";
                        });
                        let mt42=mart.filter(function(item){
                            return item.q8_1_material_used_2st==="4";
                        });
                        let mt43=mart.filter(function(item){
                            return item.q8_1_material_used_3st==="4";
                        });

                        let m1111=mt11.length+mt12.length+mt13.length;
                        let m2222=mt21.length+mt22.length+mt23.length;
                        let m3333=mt31.length+mt32.length+mt33.length;
                        let m4444=mt41.length+mt42.length+mt43.length;
                        
                        materialsBar.mergeOptions({
                            series: [{
                                name: 'Material Used',
                                label: {
                                        normal: {
                                            show: true,
                                            position: 'top',
                                            formatter: (a)=>{
                                                return a.data+ '%'
                                            },
                                        }
                                    },
                                data: [
                                        Math.round((m1111/mart.length)*100),
                                        Math.round((m2222/mart.length)*100),
                                        Math.round((m3333/mart.length)*100),
                                        Math.round((m4444/mart.length)*100),
                                    ]
                            }]
                        });

                        //get Key
                        let terrAxis=[];
                        mart.forEach((item)=>{
                            terrAxis.push(item.sep_territory);
                        });
                        //Unique key
                        terrAxis.filter( (value, index, self)=>{
                            return self.indexOf(value) === index;
                        } );

                        let dict={};
                        terrAxis.forEach((item)=>{
                            let d1=mart.filter((i)=>{
                                return i.q1_product_dc_lw==="1"&&i.sep_territory===item;
                            });
                            let d2=mart.filter((i)=>{
                                return i.q1_product_dc_lw!=="1"&&i.sep_territory===item;
                            });
            
                            let recall={};
                            recall['1st Spontaneous']=d1.length!=0?d1.length:'-';
                            recall['Other Spontaneous']=d2.length!=0?d2.length:'-';
                            recall['Prompted']='-';
                            recall['No Recall']='-';
                            dict[item]=recall;
                        })

                        

                        //List Data
                        let xyz=Object.values(dict);
                        let firstSpon=[];
                        xyz.forEach((value)=>{
                            firstSpon.push(value['1st Spontaneous'])
                        });
                        let otherSpon=[];
                        xyz.forEach((value)=>{
                            otherSpon.push(value['Other Spontaneous'])
                        });
                        console.log(firstSpon);
                        console.log(otherSpon);
                        
                        recallTerritoryBar.mergeOptions({
                             xAxis : [
                                {
                                    type : 'category',
                                    data : Object.keys(dict),
                                }
                            ],       
                             yAxis : [
                                {
                                    type : 'value'
                                }
                            ],
                            series: [
                                {
                                    name: '1st Spontaneous',
                                    type:'bar',
                                    label: {
                                        normal: {
                                            show: true,
                                            position: 'inside'
                                        },
                                    },
                                    stack: 'Recall',
                                    data: firstSpon
                                },
                                {
                                    name: 'Other Spontaneous',
                                    type:'bar',
                                    label: {
                                        normal: {
                                            show: true,
                                            position: 'inside'
                                        }
                                    },
                                    stack: 'Recall',
                                    data: otherSpon
                                },
                                {
                                    name: 'Prompted',
                                    type:'bar',
                                    stack: 'Recall',
                                    data: []
                                },
                                {
                                    name: 'No Recall',
                                    type:'bar',
                                    stack: 'Recall',
                                    data: []
                                }
                            ]
                        });

                        //commit('updateSavedData', response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                        //commit('updateSavedData', []);
                    });

                    
            
                }
            },
        
            
    }
</script>