<div style="margin-bottom: 20px;padding-top: 40px;">
    <div class="row" style="margin-left: 0px;">
        <div class="col text-uppercase">
            <h5><strong><?php
            
            if (isset($nav_modulex)) {
                echo $nav_modulex;
            } else {
                echo 'Dashboard';
            }
            
            ?>

                </strong></h5>
        </div>
        <div class="col-md-6 text-center my-auto">
            <form class="d-flex float-start" action="searchresult.html" method="post"
                style="width: 80%;padding: 10px;border-style: none;padding-top: 10px;background: #f6f6f6;padding-left: 10px;padding-bottom: 10px;padding-right: 10px;">
                <input class="border rounded-0 border-primary form-control" type="search" name="searchpatient"
                    placeholder="Search By Name or Card No." style="font-size: 14px;border-style: none;"
                    required=""><button class="btn btn-warning fw-semibold" type="submit"
                    style="padding-left: 12px;margin: 5px;">go</button>
            </form>
        </div>
        <div class="col"><a class="text-uppercase fw-bold link-dark text-decoration-none" href="staffprofile.html"
                style="font-size: 20px;">DR. AKANBI SHUBARU</a>
            <p class="fw-semibold" style="margin-bottom: 0px;"><span style="color: rgb(13, 110, 253);">Medical
                    Doctor</span></p>
        </div>
    </div>
</div>
