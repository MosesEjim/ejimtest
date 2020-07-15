@extends('layout.app')

@section('program_active', 'side-menu--active')
@section('title', 'Charts')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
           
        </div>
    </div>    

    <div class="intro-y grid grid-cols-12 gap-6 mt-10">
        <div class="col-span-12 lg:col-span-6" id="chart_container">
           
        </div>
        <div class="col-span-12 lg:col-span-6" id="chart_container2">
        
        </div>
    </div>
    
@endsection


@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script type='text/javascript'> 
    var switch_con = 1;
    var questionToResponses = @json($questionToResponses);

    function getOccurrence(array, value) {
        var count = 0;
        for(var i = 0; i<array.length; i++){
            if(value==array[i] || ' '+value==array[i]){
                count++;
            }
        }
        return count;
    }

    function getOnlyAnswerValue(array){
        onlyAnswerValues = [];
        for(var i =0; i<array.length; i++){
            onlyAnswerValues[i] = array[i].answer
        }
        return onlyAnswerValues;
    }

    function getNumberOfOccurrence(answers){
        var uniqueAnswers = new Set(answers);
        var i =0;
        var numberOfOccurence = [];
        uniqueAnswers.forEach(uniqueAnswer=>{
            numberOfOccurence[i] = getOccurrence(answers, uniqueAnswer); 
            i++;
        });
        return numberOfOccurence;
    }

    function getChartType(answers){
        if((new Set(answers)).size > 2){
            return 'bar'
        }else{
            return 'doughnut'
        }
    }

    function getLayout(title, switch_val){
        var introDiv = document.createElement('div');
        introDiv.className = "intro-y box mt-5";
        var headerDiv = document.createElement('div');
        headerDiv.className = "flex flex-col sm:flex-row items-center p-5 border-b border-gray-200";
        var chartwrapper = document.createElement('div');
        chartwrapper.className = "p-5";
        var chartDiv = document.createElement('canvas');
        chartDiv.className = "preview";
        var paragraph = document.createElement('p');
        var title = document.createTextNode(title);

        paragraph.appendChild(title);
        headerDiv.appendChild(paragraph);
        introDiv.appendChild(headerDiv);
        chartwrapper.appendChild(chartDiv);
        introDiv.appendChild(chartwrapper);
        console.log(switch_val+'switch');
        if(switch_val%2==0){
            document.getElementById('chart_container').appendChild(introDiv);
        }else{
            document.getElementById('chart_container2').appendChild(introDiv);
        }
        
        return chartDiv;
    }
    function drawChart() {
       
        var colors = ['#007892','#e71414','#f9c49a','#f9c49a','#007D7D', '#0C4289', '#3B0E8E'
        , '#510A8C', '#A40164', '#D00101', '#D05001','#D08901','#2BB001', '#19035F','#005D3A', '#618300', 
        '#8A6E00', '#4E025B', '#0E1012', '#717A83','#8F0083', '#1E040C', '#F3004A', '#11020D', '#41EAF2',
        '#8A6EA0', '#4E028B', '#0E101A', '#717A8B','#8F0081', '#1E043C', '#F3004B', '#110200', '#41EAA2',
        '#AA6EA0', '#4A028B', '#1E101A', '#7A7A8B','#7F0081', '#4E043C', '#E3004B', '#A10200', '#D1EAA2'
        ];
        for(var question in questionToResponses){
            var answers = getOnlyAnswerValue(questionToResponses[question]);
            var answerValue = getNumberOfOccurrence(answers);
            console.log(questionToResponses);
            var container = document.getElementById('myChart');
            var chart = new Chart(getLayout(question, switch_con), {
                type: getChartType(answers),
                label: 'test',
                data: {
                    labels: Array.from(new Set(answers)),
                    datasets:[{
                        data: answerValue,
                        label: "",
                        backgroundColor: colors
                    }]
                },
                options:{
                    scales: {
                        xAxes: [{
                            ticks: {
                                callback: function(value) {
                                    if(value.length<20){
                                        return value;
                                    }else{
                                        return value.substr(0, 20)+'...';//truncate
                                    }
                                    
                                },
                                
                            }
                        }],
                        yAxes: [{}]
                    },
                    tooltips: {
                        enabled: true,
                        mode: 'label',
                        callbacks: {
                            title: function(tooltipItems, data) {
                                var idx = tooltipItems[0].index;
                                return 'Title:' + data.labels[idx];
                            },
                            
                        }
                    },
                }
            });
            switch_con++;
        }
        
}
 drawChart();

</script>

@endsection



