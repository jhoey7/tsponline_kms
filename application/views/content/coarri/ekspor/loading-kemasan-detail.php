<div class="panel">
  <div class="ribbon ribbon-clip ribbon-primary"> <span class="ribbon-inner"> <i class="icon md-view-list margin-0" aria-hidden="true"></i> <?php echo $title; ?> </span> </div>
  <div>&nbsp;</div>
  <div>&nbsp;</div>
  <div>&nbsp;</div>
  <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous" aria-multiselectable="true" role="tablist">
    <div class="panel">
      <div class="panel-heading" id="exampleHeadingContinuousOne" role="tab"> <a class="panel-title" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousOne" aria-controls="exampleCollapseContinuousOne" aria-expanded="false">GATE IN</a></div>
      <div class="panel-collapse collapse" id="exampleCollapseContinuousOne" aria-labelledby="exampleHeadingContinuousOne" role="tabpanel">
        <div class="panel-body">
          <form name="form_kms" id="form_kms" class="form-horizontal" role="form" autocomplete="off" popup="1">
          <div class="panel-body container-fluid">
            <div class="row">
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">KONTAINER ASAL</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo ($arrdata['NO_CONT_ASAL']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_CONT_ASAL']; ?>" readonly="readonly">
                  <div class="hint">NOMOR KONTAINER ASAL</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">KEMASAN</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control <?php echo ($arrdata['KD_KEMASAN']!="")?"focus":""; ?>" value="<?php echo $arrdata['KD_KEMASAN']; ?>" readonly="readonly">
                  <div class="hint">KODE KEMASAN</div>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control <?php echo ($arrdata['KEMASAN']!="")?"focus":""; ?>" value="<?php echo $arrdata['KEMASAN']; ?>" readonly="readonly">
                  <div class="hint">NAMA KEMASAN</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">KOMODITI</label>
                <div class="col-sm-9">
                  <textarea class="form-control <?php echo ($arrdata['KOMODITI']!="")?"focus":""; ?>" readonly="readonly"><?php echo $arrdata['KOMODITI']; ?></textarea>
                  <div class="hint">KOMODITI</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">JUMLAH</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo ($arrdata['JUMLAH']!="")?"focus":""; ?>" value="<?php echo $arrdata['JUMLAH']; ?>" readonly="readonly">
                  <div class="hint">JUMLAH</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">BRUTO</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control <?php echo ($arrdata['BRUTO']!="")?"focus":""; ?>" value="<?php echo $arrdata['BRUTO']; ?>" readonly="readonly">
                  <div class="hint">BRUTO</div>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control <?php echo ($arrdata['CHARGE_BRUTO']!="")?"focus":""; ?>" value="<?php echo $arrdata['CHARGE_BRUTO']; ?>" readonly="readonly">
                  <div class="hint">CHARGE BRUTO</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">MASTER BL/AWB</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control <?php echo ($arrdata['NO_MASTER_BL_AWB']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_MASTER_BL_AWB']; ?>" readonly="readonly">
                  <div class="hint">NOMOR MASTER BL/AWB</div>
                </div>
                <div class="col-sm-4">
                  <input class="form-control <?php echo ($arrdata['TGL_MASTER_BL_AWB']!="")?"focus":""; ?>" type="text" value="<?php echo $arrdata['TGL_MASTER_BL_AWB']; ?>" readonly="readonly">
                  <div class="hint">TANGGAL MASTER BL/AWB</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">BL/AWB</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control <?php echo ($arrdata['NO_BL_AWB']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_BL_AWB']; ?>" readonly="readonly">
                  <div class="hint">NOMOR BL/AWB</div>
                </div>
                <div class="col-sm-4">
                  <input class="form-control <?php echo ($arrdata['TGL_BL_AWB']!="")?"focus":""; ?>" type="text" value="<?php echo $arrdata['TGL_BL_AWB']; ?>" readonly="readonly">
                  <div class="hint">TANGGAL BL/AWB</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">NOMOR POS BC11</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo ($arrdata['NO_POS_BC11']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_POS_BC11']; ?>" readonly="readonly">
                  <div class="hint">NOMOR POS BC11</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">SEGEL</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control <?php echo ($arrdata['KONDISI_SEGEL']!="")?"focus":""; ?>" value="<?php echo $arrdata['KONDISI_SEGEL']; ?>" readonly="readonly">
                  <div class="hint">KONDISI SEGEL</div>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control <?php echo ($arrdata['NO_SEGEL']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_SEGEL']; ?>" readonly="readonly">
                  <div class="hint">NOMOR SEGEL</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">CONSIGNEE</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo ($arrdata['CONSIGNEE']!="")?"focus":""; ?>" value="<?php echo $arrdata['CONSIGNEE']; ?>" readonly="readonly">
                  <div class="hint">CONSIGNEE</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">LOKASI TIMBUN</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?php echo ($arrdata['KD_TIMBUN']!="")?"focus":""; ?>" value="<?php echo $arrdata['KD_TIMBUN']; ?>" readonly="readonly">
                  <div class="hint">LOKASI TIMBUN</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">PELABUHAN MUAT</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control <?php echo ($arrdata['KD_PEL_MUAT']!="")?"focus":""; ?>" value="<?php echo $arrdata['KD_PEL_MUAT']; ?>" readonly="readonly">
                  <div class="hint">KODE PELABUHAN</div>
                </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control <?php echo ($arrdata['PEL_MUAT']!="")?"focus":""; ?>" value="<?php echo $arrdata['PEL_MUAT']; ?>" readonly="readonly">
                  <div class="hint">NAMA PELABUHAN</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">PELABUHAN TRANSIT</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control <?php echo ($arrdata['KD_PEL_TRANSIT']!="")?"focus":""; ?>" value="<?php echo $arrdata['KD_PEL_TRANSIT']; ?>" readonly="readonly">
                  <div class="hint">KODE PELABUHAN</div>
                </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control <?php echo ($arrdata['PEL_TRANSIT']!="")?"focus":""; ?>" value="<?php echo $arrdata['PEL_TRANSIT']; ?>" readonly="readonly">
                  <div class="hint">NAMA PELABUHAN</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">PELABUHAN BONGKAR</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control <?php echo ($arrdata['KD_PEL_BONGKAR']!="")?"focus":""; ?>" value="<?php echo $arrdata['KD_PEL_BONGKAR']; ?>" readonly="readonly">
                  <div class="hint">KODE PELABUHAN</div>
                </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control <?php echo ($arrdata['PEL_BONGKAR']!="")?"focus":""; ?>" value="<?php echo $arrdata['PEL_BONGKAR']; ?>" readonly="readonly">
                  <div class="hint">NAMA PELABUHAN</div>
                </div>
              </div>
              <?php /*?><div class="form-group form-material">
                <label class="col-sm-3 control-label">JENIS DOKUMEN</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control focus" value="<?php echo $arrdata['DOK_IN']; ?>" readonly="readonly">
                  <div class="hint">JENIS DOKUMEN</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">DOKUMEN</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control focus" value="<?php echo $arrdata['NO_DOK_IN']; ?>" readonly="readonly">
                  <div class="hint">NOMOR DOKUMEN</div>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control focus" value="<?php echo $arrdata['TGL_DOK_IN']; ?>" readonly="readonly">
                  <div class="hint">TANGGAL DOKUMEN</div>
                </div>
              </div>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">SARANA ANGKUT</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control focus" value="<?php echo $arrdata['SARANA_ANGKUT_IN']; ?>" readonly="readonly">
                  <div class="hint">SARANA ANGKUT</div>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control focus" value="<?php echo $arrdata['NO_POL_IN']; ?>" readonly="readonly">
                  <div class="hint">NOMOR POLISI</div>
                </div>
              </div><?php */?>
              <div class="form-group form-material">
                <label class="col-sm-3 control-label">GATE IN</label>
                <div class="col-sm-9">
                  <input class="form-control focus" type="text" value="<?php echo $arrdata['WK_IN']; ?>" readonly="readonly">
                  <div class="hint">GATE IN</div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-heading" id="exampleHeadingContinuousTwo" role="tab"> <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
          href="#exampleCollapseContinuousTwo" aria-controls="exampleCollapseContinuousTwo" aria-expanded="true"> LOADING </a> </div>
      <div class="panel-collapse collapse in" id="exampleCollapseContinuousTwo" aria-labelledby="exampleHeadingContinuousTwo" role="tabpanel">
        <div class="panel-body">
          <form name="form_kms" id="form_kms" class="form-horizontal" role="form" action="<?php echo site_url('execute/process/'.$action.'/kemasan_out/'.$id); ?>" method="post" autocomplete="off" onsubmit="save_post('form_cont','divtblkemasan'); return false;" popup="1">
            <div class="panel-body container-fluid">
              <div class="row">
              	<div class="form-group form-material">
                    <label class="col-sm-3 control-label">LOKASI TIMBUN KAPAL</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control <?php echo ($arrdata['KD_TIMBUN_KAPAL']!="")?"focus":""; ?>" value="<?php echo $arrdata['KD_TIMBUN_KAPAL']; ?>">
                      <div class="hint">LOKASI TIMBUN KAPAL</div>
                    </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">JENIS DOKUMEN</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control <?php echo ($arrdata['DOK_OUT']!="")?"focus":""; ?>" value="<?php echo $arrdata['DOK_OUT']; ?>" readonly="readonly">
                    <div class="hint">JENIS DOKUMEN</div>
                  </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">DOKUMEN</label>
                  <div class="col-sm-5">
                  	<input type="text" class="form-control <?php echo ($arrdata['NO_DOK_OUT']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_DOK_OUT']; ?>" readonly="readonly">
                    <div class="hint">NOMOR DOKUMEN</div>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control <?php echo ($arrdata['TGL_DOK_OUT']!="")?"focus":""; ?>" value="<?php echo $arrdata['TGL_DOK_OUT']; ?>" readonly="readonly">
                    <div class="hint">TANGGAL DOKUMEN</div>
                  </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">SARANA ANGKUT</label>
                  <div class="col-sm-5"> 
                  	<input type="text" class="form-control <?php echo ($arrdata['SARANA_ANGKUT_OUT']!="")?"focus":""; ?>" value="<?php echo $arrdata['SARANA_ANGKUT_OUT']; ?>" readonly="readonly">
                    <div class="hint">SARANA ANGKUT</div>
                  </div>
                  <div class="col-sm-4">
                  	<input type="text" class="form-control <?php echo ($arrdata['NO_POL_OUT']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_POL_OUT']; ?>" readonly="readonly">
                    <div class="hint">NOMOR POLISI</div>
                  </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">DAFTAR PABEAN</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control <?php echo ($arrdata['NO_DAFTAR_PABEAN']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_DAFTAR_PABEAN']; ?>" readonly="readonly">
                    <div class="hint">NOMOR DAFTAR PABEAN</div>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control <?php echo ($arrdata['TGL_DAFTAR_PABEAN']!="")?"focus":""; ?>" value="<?php echo $arrdata['TGL_DAFTAR_PABEAN']; ?>" readonly="readonly">
                    <div class="hint">TANGGAL DAFTAR PABEAN</div>
                  </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">IJIN TPS</label>
                  <div class="col-sm-5">
                  	<input type="text" class="form-control <?php echo ($arrdata['NO_IJIN_TPS']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_IJIN_TPS']; ?>" readonly="readonly">
                    <div class="hint">NOMOR IJIN TPS</div>
                  </div>
                  <div class="col-sm-4">
                  	<input type="text" class="form-control <?php echo ($arrdata['TGL_IJIN_TPS']!="")?"focus":""; ?>" value="<?php echo $arrdata['TGL_IJIN_TPS']; ?>" readonly="readonly">
                    <div class="hint">TANGGAL IJIN TPS</div>
                  </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">SEGEL BC</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control <?php echo ($arrdata['NO_SEGEL_BC']!="")?"focus":""; ?>" value="<?php echo $arrdata['NO_SEGEL_BC']; ?>" readonly="readonly">
                    <div class="hint">NOMOR SEGEL BC</div>
                  </div>
                  <div class="col-sm-4">
                  	<input type="text" class="form-control <?php echo ($arrdata['TGL_SEGEL_BC']!="")?"focus":""; ?>" value="<?php echo $arrdata['TGL_SEGEL_BC']; ?>" readonly="readonly">
                    <div class="hint">TANGGAL SEGEL BC</div>
                  </div>
                </div>
                <div class="form-group form-material">
                  <label class="col-sm-3 control-label">LOADING</label>
                  <div class="col-sm-9">
                  	<input type="text" class="form-control <?php echo ($arrdata['WK_OUT']!="")?"focus":""; ?>" value="<?php echo $arrdata['WK_OUT']; ?>" readonly="readonly">
                    <div class="hint">LOADING</div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>