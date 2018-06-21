<div class="row">
                                  <div class="col-md-10 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                             <div class="rounded mx-auto d-block">
                                              <img class="img-fluid max-width:5% height:auto" height="100px;" alt="No Image Uplaoded" src="{{URL::asset('images/'.$accidents->image)}}"/>
                                              </div>
                                            </div>
                                          </div>  
                                  </div>
                          </div>
                          <div class="row">
                                  <div class="col-md-30 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                              <div class="col-md-3 ">
                                              Incident ID: {{$accidents->incidentid}}
                                              </div>
                                              <div class="col-md-5">
                                               Incident Name: {{$accidents->incidentname}}
                                              </div>
                                              <div class="col-md-">
                                               Plane: {{$accidents->aeroplane}}
                                              </div>
                                             
                                            </div>
                                          </div>  
                                  </div>
                          </div>
                           <div class="row">
                                  <div class="col-md-30 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                               <div class="col-md-5">
                                               Location: {{$accidents->location}}
                                              </div>
                                               <div class="col-md-5">
                                               Level of Damage: {{$accidents->damagelevel}}
                                              </div>
                                             <div class="col-md-5">
                                               Casualities: {{$accidents->casualties}}
                                              </div>
                                             
                                            </div>
                                          </div>  
                                  </div>
                          </div>
                           <div class="row">
                                  <div class="col-md-30 col-md-offset-2 ">
                                        <div class="panel panel-default ">
                                           <div class="panel-body">
                                              <div class="col-md-5">
                                               More Description: {{$accidents->description}}
                                              </div>
                                            </div>
                                          </div>  
                                  </div>
                          </div>