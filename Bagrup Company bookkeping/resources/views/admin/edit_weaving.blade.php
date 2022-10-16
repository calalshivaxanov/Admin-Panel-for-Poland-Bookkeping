@extends('layouts.admin')
@section('title', 'Edit Project')


@section('specificpagecontent')



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Project ({{$programs->code}}) </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
	<div class="container-fluid">

	<div class="row">

  <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <!--<h3 class="card-title">Quick Example</h3>-->
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              @if(count($errors) > 0)
        
                           
                @foreach($errors->all() as $error)
            
                <div class="alert alert-danger"> {{$error}} </div>
            
                @endforeach

                

                @endif

               @if (session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

              <form action="{{url('home/program/update')}}" method="post" role="form">
                @csrf
                <div class="card-body">
                
                  <div class="row">

                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="set_date">Date <span class="required">*</span></label>
                  <input type="Date" id="set_date" name="set_date" class="form-control col-md-12 col-xs-12" value="{{date('Y-m-d', strtotime($programs->set_date))}}" style="background: #ffffff;">
                  </div>
                  
                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="code">Code <span class="required">*</span></label>
                  <input type="text" id="code" name="code" required="required" class="form-control col-md-12 col-xs-12" value="{{$programs->code}}" style="background: #ffffff;">
                 </div>


                 <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="customer">Customer <span class="required">*</span></label>
            

            <select class="form-control col-md-12 col-xs-12" name="customer" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                @foreach($companies as $company)

                <option value="{{$company->id}}" {{ $programs->customer == $company->id ? 'selected="selected"' : '' }}>{{$company->name}}</option>

                @endforeach
                
              </select>
            
            
            </div>


            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                      <label for="unit">Origin <span class="required">*</span></label>
                      
               <select class="form-control col-md-12 col-xs-12" name="unit" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                @foreach($units as $unit)

                <option value="{{$unit->id}}" {{ $programs->unit == $unit->id ? 'selected="selected"' : '' }}>{{$unit->name}}</option>

                @endforeach
                
              </select>
              
            </div>
                 </div>

              


                <div class="row">

                  <table width="100%" border="0" style="margin-left: 10px;">
            <tbody>
            <tr style="text-align: center;">
              <td style="padding-bottom: 10px;" width="10%">&nbsp;</td>
              <td style="padding-bottom: 10px;"><strong>Type</strong></td>
              <td style="padding-bottom: 10px;"><strong>Local / Foreign</strong> </td>
              <td style="padding-bottom: 10px;"><strong>Language</strong> </td>
            </tr>
            <tr>
              <td><strong>Website  <span class="required">*</span></strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="warp_count" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                @foreach($w_extras1 as $w_extra1)

                <option value="{{$w_extra1->name}}" {{ $programs->warp_count == $w_extra1->name ? 'selected="selected"' : '' }}>{{$w_extra1->name}}</option>

                @endforeach

              </select> 
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="warp_yarn_type" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                @foreach($w_extras2 as $w_extra2)
                
                <option value="{{$w_extra2->name}}" {{ $programs->warp_yarn_type == $w_extra2->name ? 'selected="selected"' : '' }}>{{$w_extra2->name}}</option>

                @endforeach

              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="warp_yarn_blend" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                @foreach($w_extras3 as $w_extra3)
                
                <option value="{{$w_extra3->name}}" {{ $programs->warp_yarn_blend == $w_extra3->name ? 'selected="selected"' : '' }}>{{$w_extra3->name}}</option>

                @endforeach
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Android  <span class="required">*</span></strong></td>
              <td>
                            
              <select class="form-control col-md-12 col-xs-12" name="weft1_count" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                @foreach($w_extras1 as $w_extra1)

                <option value="{{$w_extra1->name}}" {{ $programs->weft1_count == $w_extra1->name ? 'selected="selected"' : '' }}>{{$w_extra1->name}}</option>

                @endforeach
                
                                
              </select>
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft1_yarn_type" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                @foreach($w_extras2 as $w_extra2)
                
                <option value="{{$w_extra2->name}}" {{ $programs->weft1_yarn_type == $w_extra2->name ? 'selected="selected"' : '' }}>{{$w_extra2->name}}</option>

                @endforeach                
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft1_yarn_blend" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                @foreach($w_extras3 as $w_extra3)
                
                <option value="{{$w_extra3->name}}" {{ $programs->weft1_yarn_blend == $w_extra3->name ? 'selected="selected"' : '' }}>{{$w_extra3->name}}</option>

                @endforeach
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>iOS</strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="weft2_count" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                
                 @foreach($w_extras1 as $w_extra1)

                <option value="{{$w_extra1->name}}" {{ $programs->weft2_count == $w_extra1->name ? 'selected="selected"' : '' }}>{{$w_extra1->name}}</option>

                @endforeach
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft2_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                
                @foreach($w_extras2 as $w_extra2)
                
                <option value="{{$w_extra2->name}}" {{ $programs->weft2_yarn_type == $w_extra2->name ? 'selected="selected"' : '' }}>{{$w_extra2->name}}</option>

                @endforeach               
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft2_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

               @foreach($w_extras3 as $w_extra3)
                
                <option value="{{$w_extra3->name}}" {{ $programs->weft2_yarn_blend == $w_extra3->name ? 'selected="selected"' : '' }}>{{$w_extra3->name}}</option>

                @endforeach
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Online Software</strong></td>
              <td>                
              
              <select class="form-control col-md-12 col-xs-12" name="weft3_count" style="width: 97%; margin-bottom: 10px;">
                
                 <option value="">Select</option>
                
                 @foreach($w_extras1 as $w_extra1)

                <option value="{{$w_extra1->name}}" {{ $programs->weft3_count == $w_extra1->name ? 'selected="selected"' : '' }}>{{$w_extra1->name}}</option>

                @endforeach
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft3_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>  

                @foreach($w_extras2 as $w_extra2)
                
                <option value="{{$w_extra2->name}}" {{ $programs->weft3_yarn_type == $w_extra2->name ? 'selected="selected"' : '' }}>{{$w_extra2->name}}</option>

                @endforeach               
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft3_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option> 

                @foreach($w_extras3 as $w_extra3)
                
                <option value="{{$w_extra3->name}}" {{ $programs->weft3_yarn_blend == $w_extra3->name ? 'selected="selected"' : '' }}>{{$w_extra3->name}}</option>

                @endforeach  
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Desktop Software</strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="weft4_count" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                
                @foreach($w_extras1 as $w_extra1)
                
                <option value="{{$w_extra1->name}}" {{ $programs->weft4_count == $w_extra1->name ? 'selected="selected"' : '' }}>{{$w_extra1->name}}</option>
                
                @endforeach
                
                                
                </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft4_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                @foreach($w_extras2 as $w_extra2)
                
                <option value="{{$w_extra2->name}}" {{ $programs->weft4_yarn_type == $w_extra2->name ? 'selected="selected"' : '' }}>{{$w_extra2->name}}</option>

                @endforeach              
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft4_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>   

               @foreach($w_extras3 as $w_extra3)
                
                <option value="{{$w_extra3->name}}" {{ $programs->weft4_yarn_blend == $w_extra3->name ? 'selected="selected"' : '' }}>{{$w_extra3->name}}</option>

                @endforeach                
                                
              </select>             
              </td>
            </tr>
            </tbody>
          </table>



                 </div>


                 <div class="ln_solid" style="border-bottom: 1px solid #e5e5e5;margin: 20px 0; "></div>


                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
              <label for="w_writing">Remarks <span class="required">*</span></label>
              <textarea class="form-control col-md-12 col-xs-12" name="remarks">{{$programs->remarks}}</textarea>
              </div>

                </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">

                  <input type="hidden" id="seller_id" name="seller_id" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="change_by" name="change_by" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="etm_code" name="etm_code" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="wid" name="wid" class="form-control col-md-12 col-xs-12" value="{{ Hashids::encode($programs->wid) }}">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            





 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



@endsection