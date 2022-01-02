@extends('layouts.app')

@section('page_title','Data Tracer')
@section('content_name','DATA TRACER')
@section('content_body')

    <div class="flex ">
       
        <div class="w-1/2 mx-4">
              <canvas id="myChart" class="" width="400" height="400"></canvas>
        </div>
      
       <div class="w-1/2 mx-4">
        <div id="grid" class="text-xs"></div>
        </div>
    </div>
   
    <div class="flex ">
       
        <div class="w-1/2 mx-4">
            @include('data_akademik\chart_data_akademik.jenis_kelamin')
        </div>
      
       <div class="w-1/2 mx-4">
        </div>
    </div>

    <script>
     
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: 'Keluar',
                backgroundColor: "#03fc9d",
                borderColor: "#03fc9d",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 12
              },
              {
                label: 'Mahsiswa Aktif',
                fill: false,
                backgroundColor: "#1e2430",
                borderColor: "#1e2430",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 12
              },
              {
                label: 'Mahasiswa Baru',
                fill: false,
                backgroundColor: "#d63d29",
                borderColor: "#d63d29",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 12
              },
              {
                label: 'Regsitri tanpa Key-in KRS',
                fill: false,
                backgroundColor: "#bfde23",
                borderColor: "#bfde23",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 12
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)"
              },
              align: "center",
              position: "top"
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month"
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value"
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
            var ctx = document.getElementById('myChart').getContext('2d');
            ctx.canvas.height = 200;
            const myChart = new Chart(ctx, config);
    </script>
      <script>
        $(document).ready(function () {
            var crudServiceBaseUrl = "https://demos.telerik.com/kendo-ui/service",
                dataSource = new kendo.data.DataSource({
                    transport: {
                        read:  {
                            url: crudServiceBaseUrl + "/Products",
                            dataType: "jsonp"
                        },
                        update: {
                            url: crudServiceBaseUrl + "/Products/Update",
                            dataType: "jsonp"
                        },
                        destroy: {
                            url: crudServiceBaseUrl + "/Products/Destroy",
                            dataType: "jsonp"
                        },
                        create: {
                            url: crudServiceBaseUrl + "/Products/Create",
                            dataType: "jsonp"
                        },
                        parameterMap: function(options, operation) {
                            if (operation !== "read" && options.models) {
                                return {models: kendo.stringify(options.models)};
                            }
                        }
                    },
                    batch: true,
                    pageSize: 20,
                    schema: {
                        model: {
                            id: "ProductID",
                            fields: {
                                ProductID: { editable: false, nullable: true },
                                ProductName: { validation: { required: true } },
                                UnitPrice: { type: "number", validation: { required: true, min: 1} },
                                Discontinued: { type: "boolean" },
                                UnitsInStock: { type: "number", validation: { min: 0, required: true } }
                            }
                        }
                    }
                });

            $("#grid").kendoGrid({
                dataSource: dataSource,
                pageable: true,
                height: 200,
                columns: [
                    "ProductName",
                    { field: "UnitPrice", title: "Unit Price", format: "{0:c}", width: "120px" },
                    { field: "UnitsInStock", title:"Units In Stock", width: "120px" },
                    { field: "Discontinued", width: "120px", editor: customBoolEditor },
                    { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }],
                editable: "inline"
            });
        });

        function customBoolEditor(container, options) {
            $('<input class="k-checkbox" type="checkbox" name="Discontinued" data-type="boolean" data-bind="checked:Discontinued">').appendTo(container);
        }
    </script>

@endsection