<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entry page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/theme/mdn-like.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/addon/lint/lint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    <meta charset="utf-8">
    <style>
        .con {
            margin: 50px auto;
            max-width: 960px;
        }
    </style>
</head>
<body><br>
<div class="container "   >
    <div class="row"  >
      <h4 style="text-align:center">kickstart meta data entery</h4>
      <br>
    </div>
                 
           <!-- <form method="post" action="index.php" >             -->
<form id="my-profile" class="formfield" method="post" validate>

           <!--Accordion wrapper-->
    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    
          <!-- Accordion card -->
        <div class="card">
            <!-- Card header -->
              <div class="card-header" role="tab" id="headingOne1">
                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                  aria-controls="collapseOne1">
                  <h5 class="mb-0">
                  kickStartCollection menu       <i class="fas fa-angle-down rotate-icon"></i>
                  </h5>
                </a>
              </div>
              <!-- Card body -->
              <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                <div class="card-body">
                <div class=" form-group row ">
                        <label  class=" col-form-label col-2"  >mcId</label>                 
                        <input type="text" name="kickStartCollection[[mcId]]" id="mcidin"  class="num col-7  form-control"    >    
                        <span id="mcidinerr"></span>
                  </div>
                  <div class="form-group row">
                        <label for="" class="col-form-label col-2">mainCategory</label>
                        <input type="text" name="kickStartCollection[[mainCategory]]" id="maincat" class="str  col-7  form-control"     >                    
                        <span id="maincaterr"></span>
                  </div>
                  <div class="form-group row">
                        <label for="" class="col-form-label col-2">mainDesc</label>
                        <input type="text" name="kickStartCollection[[mainDesc]]" id="maindes" class="str   col-7  form-control"     >
                        <span id="maindeserr"></span>
                  </div>
                  <div class="form-group row">
                        <label for="" class="col-form-label col-2">mainOrder</label>
                        <input type="text" name="kickStartCollection[[mainOrder]]" id="mainor"  class="num   col-7  form-control"     >
                        <span id="mainorerr"></span>
                  </div>
                </div>
              </div>

            </div>
            <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">
              <div class="row ">
                    <div class="col-11 ">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo2">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0">
                    sub categories menu      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                </div>
                    <div class="col-1 ">
                    <button name="add" type="button"id="addsub" class="btn btn-success">add</button> 
                    </div>
                    </div>
                <!-- Card body -->
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                  <div class="card-body">
                  <div class="form-group row">
                        <label for="" class="col-form-label col-2">scId</label>
                        <input type="text" name="kickStartCollection[[subCategories]]   [[scId]]"id="scidin"class="num  col-7 form-control"     >        
                        <span id="scidinerr" ></span>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-form-label col-2">subCategory</label>
                        <input type="text" name="kickStartCollection[[subCategories]]   [[subCategory]]"id="subcat" class="str  col-7  form-control"       >
                        <span id="subcaterr" ></span>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-form-label col-2">releaseDate</label>
                        <input type="Date" name="kickStartCollection[[subCategories]]   [[releaseDate]]"  id="reldate" class="dat col-7 form-control"   >
                        <span id="reldateerr" ></span>
                    </div>
                      <div class="form-group row">
                        <label for="" class="col-form-label col-2">subOrder</label>
                        <input type="text" name="kickStartCollection[[subCategories]]   [[subOrder]]" id="subord" class="num col-7 form-control"   >
                        <span id="suborderr"></span>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- Accordion card -->
              
            
                  <!-- Accordion card -->
                  <div class="card">
                    <!-- Card header -->
                    <div class="row ">
                    <div class="col-11 ">
                    <div class="card-header" role="tab" id="headingThree3">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                        aria-expanded="false" aria-controls="collapseThree3">
                        <h5 class="mb-0">
                        kick starts menu <i class="fas fa-angle-down rotate-icon"></i> 
                        </h5>
                      </a>
                    </div>
                    </div>
                    <div class="col-1 ">
                    <button name="add" type="button"id="add" class="btn btn-success">add</button> 
                    </div>
                    </div>
                    
                    <!-- Card body -->
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                      <div class="card-body " id="3sub">
                      
                      <div class="form-group row">
                            <label for="" class="col-form-label col-2">ksId</label>
                            <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ksId]]" id="ksid" class="num   col-7  form-control"   >
                            <span id="ksiderr"></span>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">ksName</label>
                            <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ksName]]" id="ksname" class="str   col-7  form-control"   >
                            <span id="ksnameerr"></span>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">isoFileName</label>
                            <input type="" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[isoFileName]]"  id="isofile" class="iso   col-7  form-control"   >
                            <span id="isofileerr"></span>
                          </div>
                        <br>
                          <!-- Accordion card -->
                  <div class="card">
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse"  href="#collapseThree3sub1"
                      aria-expanded="false" aria-controls="collapseThree3sub">
                      <h5 class="mb-0">
                      Docs <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>  
                  <!-- Card body -->
                  <div id="collapseThree3sub1" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#collapseThree3sub1">
                    <div class="card-body">
                    <div class="form-group row">
                            <label for="" class="col-form-label col-2">documentName</label>
                            <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[docs]][[documentName]]" id="docna" class="str col-7  form-control"   >  
                            <span id="docnaerr"></span>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">fileName</label>
                            <input type="" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[docs]][[fileName]]" id="filna" class="str col-7  form-control"      >
                            <span id="filnaerr"></span>
                          
                        </div>
                    
                    </div>
                  </div>
                  </div><br>
                  <div class="form-group row">
                          <label for="" class="col-form-label col-2">hashType</label>
                          <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[hashType]]" id="hashty"   class="str   col-7  form-control"   >
                          <span id="hashtyerr"></span>
                    </div>
                    <div class="form-group row">
                          <label for="" class="col-form-label col-2">hash</label>
                          <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[hash]]"  id="Hash"   class="has col-7 form-control"   >
                          <span id="Hasherr"></span>
                          
                    </div>
                    <div class="form-group row">
                          <label for="" class="col-form-label col-2">hashFileName</label>
                          <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[hashFileName]]"  id="hashfi" class="str col-7 form-control"   >
                          <span id="hashfierr"></span>
                    </div>
                    <div class="form-group row">
                          <label for="" class="col-form-label col-2">versionNo</label>
                          <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[versionNo]]" id="versno" class="ver col-7 form-control"    >
                          <span id="versnoerr"></span>
                    </div>
                    <div class="form-group row">
                          <label for="" class="col-form-label col-2">createdDate</label>
                          <input type="Date" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[createdDate]]"  id="creda"   class="dat   col-7  form-control"    >
                          <span id="credaerr"></span>
                    </div>
                    <div class="form-group row">
                          <label for="" class="col-form-label col-2">modifiedDate</label>
                          <input type="date" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[modifiedDate]]"  id="moddate"   class="dat   col-7  form-control"    >
                          <span id="moddateerr"></span>
                    </div><br>
                  <!-- Accordion card -->
                  <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse"  href="#collapseThree3sub2"
                      aria-expanded="false" aria-controls="collapseThree3sub">
                      <h5 class="mb-0">
                      ossToolsUsed<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>

                  <!-- Card body -->
                  <div id="collapseThree3sub2" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#collapseThree3sub2">
                    <div class="card-body">
                    <div class="form-group row">
                              <label for="" class="col-form-label col-2">toolId</label>                     
                              <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ossToolsUsed]][[toolId]]" id="tolid"class="num col-7 form-control"   >
                              <span id="toliderr"></span>
                        </div>
                        <div class="form-group row">
                              <label for="" class="col-form-label col-2">version</label>                     
                              <input type="" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ossToolsUsed]][[version]]"  id="versii"   class="ver col-7 form-control"   >
                              <span id="versiierr"></span>
                        </div>
                        <div class="form-group row">
                              <label for="" class="col-form-label col-2">toolId</label>
                              <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ossToolsUsed]][[toolId]]" id="tooli"   class="num col-7 form-control"   >
                              <span id="toolierr"></span>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-2">version</label>           
                            <input type="" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ossToolsUsed]][[version]]"  id="versi"   class="ver col-7 form-control"   >
                            <span id="versierr"></span>
                        </div>
                    </div>
                  </div>

                  </div>
                  <!-- Accordion card -->
                  <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse"  href="#collapseThree3sub3"
                      aria-expanded="false" aria-controls="collapseThree3sub">
                      <h5 class="mb-0">
                      otherToolsUsed<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>

                  <!-- Card body -->
                  <div id="collapseThree3sub3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#collapseThree3sub3">
                    <div class="card-body">
                    <div class="form-group row">
                              <label for="" class="col-form-label col-2">toolName</label>                     
                              <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[otherToolsUsed]][[toolName]]" id="ottoona"class="str col-7  form-control"   >
                              <span id="ottoonaerr"></span>
                        </div>
                        <div class="form-group row">
                              <label for="" class="col-form-label col-2">version</label>                     
                              <input type="" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[otherToolsUsed]][[version]]"  id="otver" class="ver col-7 form-control"   >
                              <span id="otvererr"></span>
                        </div>
                    
                    </div>
                  </div>
                  </div>
                  <!-- Accordion card -->
                  <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse"  href="#collapseThree3sub4"
                      aria-expanded="false" aria-controls="collapseThree3sub">
                      <h5 class="mb-0">
                      user applications<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>

                  <!-- Card body -->
                  <div id="collapseThree3sub4" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#collapseThree3sub4">
                    <div class="card-body">
                    <div class="form-group row">
                              <label for="" class="col-form-label col-2">application name</label>                     
                              <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[userApplications]][[applicationName]]" id="appnam" class="str col-7  form-control"          >
                              <span id="appnamerr"></span>
                        </div>
                        <div class="form-group row">
                              <label for="" class="col-form-label col-2">version</label>                     
                              <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[userApplications]][[version]]"  id="appver"   class="ver col-7  form-control"         >
                              <span id="appvererr"></span>
                        </div>
                    
                    </div>
                  </div>

                  </div><br>
                  <div class="form-group row">
                              <label for="" class="col-form-label col-2">ksorder</label>                     
                              <input type="text" name="kickStartCollection[[subCategories]]   [[kickStarts]] [[ksOrder]]" id="ksor" class="num col-7 form-control"   >
                              <span id="ksorerr"></span>
                        </div>

                        </div>
                        
                      </div>
                      

                    </div>
                    <div class="card" id="card"></div>
                    <div class="card" id="cards"></div>
                    
                    <!-- <div id="sudden"></div> -->
      
                      </div>
                      <br><br>
    
<div class=" mr-5 row">
        <button type="submit" name="submit" class="submit mr-5 btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
        Json Viewer
            </button>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a type="submit" href="API/insert.php" class="mr-4 btn btn-primary">insert</a>  

  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Json Viewer </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <textarea class = "form-control" id="result" cols="60" rows="10" disabled> {}</textarea><br>
      <div class="modal-headerr">
        <button type="button" name="translate" id="translate" class="btn btn-primary" >Translate</button>
        <button type="button"name="clear" id="clear" class="btn btn-primary">Clear</button>
        
      </div>
      <br>
        <pre id="json-display"></pre>
      </div>
    </div>
  </div>
</div>

<!-- <a type="submit" href="API/insert.php" class="mr-4 btn btn-primary">insert</a>    -->
</div>   
</div>
<!-- Accordion wrapper -->

</form>
<div class="container con "   >

        <h1>json validator</h1>
        <div class="row col">
            <h4>Paste Your JSON Here</h4>
        </div>
        <textarea class="form-control codemirror-textarea" rows="5" autofocus=""></textarea>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary text-left mt-2 mr-2 " id="validate">Validate json</button>
                <button class="btn btn-primary text-left mt-2 ml-2" id="reset">Clear</button>
            </div>
        </div>
        <div class="row">
            <div id=error class="alert alert-danger mt-4 mb-4">
            </div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script> -->
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/jquery.json-editor.min.js"></script>

 <!--------------------json validator------------->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
   
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/addon/selection/active-line.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/addon/lint/json-lint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.serializeJSON/2.9.0/jquery.serializejson.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsonlint/1.6.0/jsonlint.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/multitable.js"></script>

   
    
    <script>

</script>
</body>
</html>



