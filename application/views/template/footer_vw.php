                            <div class="row ">
                                <div class=" col-lg-12">
                                    <div class="page-title footerchange">© 2020 Coronavirus Tracker - Furkan KAHVECİ - Design by tvtien2k
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php $this->load->view("template/js_vw");?>

<script>
    $(document).ready(function () {
        $('table').DataTable({
            order: [],
            paging: true,
            "pageLength": 25,
            "pagingType": "full_numbers",
            "dom": '<"top"flp>rt<"bottom"ip><"clear">',
        });
    });
</script>
