<?php $this->load->view("template/head_vw"); ?>
<?php $this->load->view("geochart_vw"); ?>
<body>
<div id="content-page">
    <div class="content">
        <div class="row ">
            <div class=" col-lg-12">
                <div class="page-header-title" style="margin-top:1px;">
                    <h4 class="page-title" style="text-align:center;">Số liệu thống kê trên toàn thế giới</h4>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted mb-0">Trường hợp</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15">
                                    <b><?php echo number_format($TOTAL_CASE_REPORTED); ?></b>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted mb-0">Tử vong</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15">
                                    <b><?php echo number_format($TOTAL_DEATHS_REPORTED); ?></b>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted mb-0">Hồi phục</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15">
                                    <b><?php echo number_format($TOTAL_RECOVERED_REPORTED); ?></b>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted mb-0">Mới</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15">
                                    <b><?php echo number_format($TOTAL_CASE_REPORTED_LASTDAY); ?></b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="page-title" style="text-align:center;">Số liệu thống kê tại Việt Nam</h4>
                <?php foreach ($RESULT_DATA as $result) {
                    if ($result['country'] == "Vietnam") { ?>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-center">
                                    <div class="card-heading">
                                        <h4 class="card-title text-muted mb-0">Trường hợp</h4>
                                    </div>
                                    <div class="card-body p-t-10">
                                        <h2 class="m-t-0 m-b-15">
                                            <b><?php echo number_format($result['cases']); ?></b>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-center">
                                    <div class="card-heading">
                                        <h4 class="card-title text-muted mb-0">Tử vong</h4>
                                    </div>
                                    <div class="card-body p-t-10">
                                        <h2 class="m-t-0 m-b-15">
                                            <b><?php echo number_format($result['deaths']); ?></b>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-center">
                                    <div class="card-heading">
                                        <h4 class="card-title text-muted mb-0">Hồi phục</h4>
                                    </div>
                                    <div class="card-body p-t-10">
                                        <h2 class="m-t-0 m-b-15">
                                            <b><?php echo number_format($result['recovered']); ?></b>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-center">
                                    <div class="card-heading">
                                        <h4 class="card-title text-muted mb-0">Mới</h4>
                                    </div>
                                    <div class="card-body p-t-10">
                                        <h2 class="m-t-0 m-b-15">
                                            <b><?php echo number_format($result['todayCases']); ?></b>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } ?>


                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div id="regions_div"></div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-b-30 m-t-0">Statistics</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="datatable"
                                                   class="table table-striped table-bordered dt-responsive nowrap"
                                                   cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Quốc gia / Vùng lãnh thổ</th>
                                                    <th>Trường hợp</th>
                                                    <th>Tử vong</th>
                                                    <th>Hồi phục</th>
                                                    <th>Đã test</th>
                                                    <th>Mới</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($RESULT_DATA as $result) { ?>
                                                    <tr>
                                                        <td><img
                                                                src="<?php if (strpos($result['image'], 'gstatic') !== false) {
                                                                    echo $result['image'];
                                                                } else {
                                                                    echo "https://www.gstatic.com/onebox/sports/logos/flags/" . strtolower(str_replace(" ", "_", $result['image'])) . "_icon_square.svg";
                                                                } ?>
                                                            " height="20" width="20"> <?php echo $result['country']; ?>
                                                        </td>
                                                        <td><?php echo number_format($result['cases']); ?></td>
                                                        <td><?php echo number_format($result['deaths']); ?></td>
                                                        <td><?php echo number_format($result['recovered']); ?></td>
                                                        <td><?php echo number_format($result['totalTests']); ?></td>
                                                        <td><?php echo number_format($result['todayCases']); ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view("template/footer_vw"); ?>
