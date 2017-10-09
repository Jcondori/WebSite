<?php require 'views/template/header.php'; ?>

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Gáleria</h3>
    </div>
</div>

<div class="container-fluid">
    <div class="row el-element-overlay">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="<?php echo RUTA; ?>/resources/img/parallax/testimonial.jpg" alt="user" />
                        <div class="el-overlay">
                            <ul class="el-info">
                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo RUTA; ?>/resources/img/parallax/testimonial.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-edit"></i></a></li>
                                <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h3 class="box-title">Titulo de la imagen</h3> <small>Description de la imagen</small>
                        <br/> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'views/template/footer.php'; ?>

