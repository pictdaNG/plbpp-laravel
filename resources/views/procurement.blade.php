@extends('layouts.master')

@section('title')
  Procurement | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('procurement')
    uk-active
@endsection

@section('content')
    <section class="body container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-3 ">
                <div class="el-banner">
                    <div class="row">
                        <div class="col el-center el-flex align-items-center">
                            <div class="el-leftHolder">
                                <img src="./assets/img/platStet.png" alt="" />
                                <h3>Plateau State Open Contracting Portal</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="el-cards-holder">
                    <div class="row">
                        <div class="col">
                            <h3>SUMMARY</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="el-card el-flex">
                                <div class="col-md-4  el-bgColorGreen  el-center">
                                    <img src="./assets/img/abacus.png" alt="" />
                                </div>
                                <div class="col-md-8 el-flex align-items-center">
                                    <div class="el-content-holder">
                                        <p class="el-cardTitle">
                                            TOTAL NUMBER OF PROJECTS
                                        </p>
                                        <p class="el-cardFigure">
                                            1024
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="el-card el-flex">
                                <div class="col-md-4  el-bgColorRed  el-center">
                                    <img src="./assets/img/cashbox.png" alt="" />
                                </div>
                                <div class="col-md-8 el-flex align-items-center">
                                    <div class="el-content-holder">
                                        <p class="el-cardTitle">
                                            TOTAL SUM OF PROJECTS
                                        </p>
                                        <p class="el-cardFigure">
                                            ₦ 45,091,199,582
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="el-card el-flex">
                                <div class="col-md-4  el-bgColorYellow el-center">
                                    <img src="./assets/img/graph.png" alt="" />
                                </div>
                                <div class="col-md-8 el-flex align-items-center">
                                    <div class="el-content-holder">
                                        <p class="el-cardTitle">
                                            HIGHEST CONTRACT AMOUNT
                                        </p>
                                        <p class="el-cardFigure">
                                            ₦ 2,283,102,632
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="el-card el-flex">
                                <div class="col-md-4  el-bgColorGreen el-center">
                                    <img src="./assets/img/graph(2).png" alt="" />
                                </div>
                                <div class="col-md-8 el-flex align-items-center">
                                    <div class="el-content-holder">
                                        <p class="el-cardTitle">
                                            LOWEST CONTRACT AMOUNT
                                        </p>
                                        <p class="el-cardFigure">
                                            ₦ 210,735
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid body ">
        <div class="row el-paddingTop30">
            <div class="col-md-12 col-lg-3 ">
                <div class="row">
                    <div class="col">
                        <h3>FILTER PROJECTS</h3>
                        <div class="uk-margin uk-card uk-card-body uk-card-default">
                            <label class="uk-form-label" for="form-stacked-select"
                            ><h5>FILTER BY SECTOR</h5></label
                            >
                            <div class="uk-form-controls">
                                <select class="uk-select" id="form-stacked-select">
                                    <option value="Health">Health</option
                                    ><option value="Construction">Construction</option
                                ><option value="Education">Education</option
                                ><option value="Finance">Finance</option
                                ><option value="Social Development"
                                >Social Development</option
                                ><option value="Telecommunications"
                                >Telecommunications</option
                                ><option value="Agriculture">Agriculture</option
                                ><option value="Environment">Environment</option
                                ><option value="Justice">Justice</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-margin uk-card uk-card-body uk-card-default">
                            <label class="uk-form-label" for="form-stacked-select"
                            ><h5>FILTER BY YEAR</h5></label
                            >
                            <div class="uk-form-controls">
                                <div>
                                    <label
                                    ><input class="uk-checkbox" type="checkbox" checked />
                                        2019</label
                                    >
                                </div>
                                <div>
                                    <label
                                    ><input class="uk-checkbox" type="checkbox" />
                                        2018</label
                                    >
                                </div>
                                <div>
                                    <label
                                    ><input class="uk-checkbox" type="checkbox" />
                                        2017</label
                                    >
                                </div>
                                <div>
                                    <label
                                    ><input class="uk-checkbox" type="checkbox" />
                                        2016</label
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-card uk-card-body uk-card-default">
                            <label class="uk-form-label" for="form-stacked-select"
                            ><h5>
                                FILTER BY MINISTRIES, DEPARTMENTS &amp; AGENCIES
                            </h5></label
                            >
                            <div class="uk-form-controls">
                                <select class="uk-select" id="form-stacked-select">
                                    <option value="9">College Of Education</option>
                                    <option value="12">Ministry of Agriculture</option
                                    ><option value="7">Ministry of Education</option
                                ><option value="13"
                                >Ministry of Environment and Natural Resources</option
                                ><option value="4">Ministry of Finance</option
                                ><option value="1"
                                >Ministry of Health & Human Services</option
                                ><option value="15"
                                >Ministry of Information and Home Affairs</option
                                ><option value="19">Ministry of Justice</option
                                ><option value="11"
                                >Ministry of Science and Technology</option
                                ><option value="16">Ministry of Water Resources</option
                                ><option value="6">Ministry of Women Affairs</option
                                ><option value="2"
                                >Ministry of Works Housing and Transport</option
                                ><option value="8">Ministry of Youth and Sport</option
                                ><option value="5">Ministry of Youth And Sports</option
                                ><option value="20">Planning and Budget Commission</option
                                ><option value="21"
                                >Secretary to the State Government</option
                                ><option value="3"
                                >State Universal Basic Education</option
                                >
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-9 ">
                <div class="row">
                    <div class="col">
                        <h3>PROJECTS</h3>
                    </div>
                </div>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-striped">
                        <thead class="el-tableHead">
                        <tr>
                            <th>Title</th>
                            <th>Contract Amount</th>
                            <th>Contractor</th>
                            <th>LGA</th>
                            <th>Approval Year</th>
                            <th>Procurring Entity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        <tr>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        <tr>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        <tr>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        <tr>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        <tr>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        </tbody>
                    </table>
                    <ul
                            class="uk-pagination uk-flex-right uk-margin-medium-top"
                            uk-margin
                    >
                        <li>
                            <a href="#"><span uk-pagination-previous></span></a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="uk-active"><span>7</span></li>
                        <li><a href="#">8</a></li>
                        <li>
                            <a href="#"><span uk-pagination-next></span></a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>CHART SUMMARY</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <canvas height="300" id="myChart"></canvas>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <canvas height="300" id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid body"></section>
    @endsection