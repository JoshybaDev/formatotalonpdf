<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .animation_base {
            transition-timing-function: ease-in-out;
            transition-duration: 5s
        }

        .animationes {
            transition-delay: 0.5s;
        }

        #card_pdf>.card-body {
            height: 500px;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5 border p-4">
        <div class="card mt-1 mb-5">
            <div class="card-header">Data
                <div class="div float-right"><button id="btn_cerrar" class="btn btn-danger">Cerrar</button></div>
            </div>
            <div class="card-body p-4" id="card_body" class="animation_base animationes">
                <form action="" method="post" class="animation_base animationes">
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="title1" id="" value="16 * NOMINA DE SUELDOS ISSTECH *">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="title3" id="" value="4">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="title2" id="" value="OFICI. AFILIACION Y VIG. DER.">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="rfc" id="" value="XXXX6708190">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="nombrec" id="" value="MENGANO PATERNO MATERNO">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="number" id="" value="486">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="puesto" id="" value="ADMINISTRATIVO TECNICO &quot;A&quot;">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="fecha" id="" value="DEL 16 AL 30 DE NOVIEMBRE DE 1991.">
                        </div>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="dias_num" id="" value="15.00 DIAS.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            Percepciones
                            <div class="row">
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="perp1[0]" id="" value="001"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="perp2[0]" id="" value="S A L A R I O"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control text-right" type="text" name="perp3[0]" id="" value="292,650.00"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="perp1[1]" id="" value="005"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="perp2[1]" id="" value="PREVISION SOCIAL"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control text-right" type="text" name="perp3[1]" id="" value="5,000.00"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="perp1[2]" id="" value="006"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="perp2[2]" id="" value="DESPENSA"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control text-right" type="text" name="perp3[2]" id="" value="10,000.00"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            Deducciones
                            <div class="row">
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="ded1[0]" id="" value="051"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="ded2[0]" id="" value="CUOTA ISSTECH."></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control text-right" type="text" name="ded3[0]" id="" value="23,412.00"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="ded1[1]" id="" value="052"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="ded2[1]" id="" value="I. S. P. T."></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control text-right" type="text" name="ded3[1]" id="" value="2,454.00"></div>
                            </div>
                            <div class="row"><div class="col">Aplicar Descuento <input type="checkbox" name="descuento" id="" value="1"></div></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="ded1[2]" id="" value="081"></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="ded2[2]" id="" value="DESCUENTO P.CP."></div>
                                <div class="col-lg-4 col-md-4"><input class="form-control text-right" type="text" name="ded3[2]" id="" value="51,732.00"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            Total Percepciones
                            <div class="row">
                                <div class="col-lg-6"><input class="form-control text-right" type="text" name="totalperp" id="" value="307,650.00"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            Total Deducciones
                            <div class="row">
                                <div class="col-lg-6"><input class="form-control text-right" type="text" name="totalded" id="" value="77,598.00"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Liquido
                            <input class="form-control" type="text" name="liquido" id="" value="230,052.00">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Letras
                            <input class="form-control" type="text" name="letras" id="" value="(**DOSCIENTOS TREINTA MIL CIENCUENTA Y DOS PESOS 00/100 M.N.**)">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col center">
                            <button type="button" class="btn btn-primary" onclick="generar()">Generar Pdf</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-5" id="card_pdf">
            <div class="card-header">Pdf</div>
            <div class="card-body">
                <a name="pdf"></a>
                <iframe id="visorpdf" src="" height="100%" width="100%"></iframe>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>