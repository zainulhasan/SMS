@extends('../layout.master')
@section('title','Chapter')




@section('styles')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>


    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}"/>

    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css')}}"/>











    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/gritter/css/jquery.gritter.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/clockface/css/clockface.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-datepicker/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-timepicker/compiled/timepicker.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-colorpicker/css/colorpicker.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/jquery-multi-select/css/multi-select.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/jquery-tags-input/jquery.tagsinput.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}"/>














@stop

@section("top-option")


    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Chapters
        </h3>

        <ul class="page-breadcrumb breadcrumb">


            <li class="btn-group">

                <a style="color:#fff;"
                   href="{{route('createChapter',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term_id])}}"
                   class="btn purple">
                    <i class="fa fa-plus"></i> Add Chapter
                </a>
            </li>
            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('sessions')}}">Sessions</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('classes',['id'=>$id])}}">Classes</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('subjects',['id'=>$id,'class_id'=>$class_id])}}">Subjects</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li>
                <a href="{{route('terms',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id])}}">Term</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Chapter</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop






@section('content')

    <div class="row">
        <div class="col-md-12">


            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Session ({{date('M-y',strtotime($session->startingDate))}}
                        -{{date('M-y',strtotime($session->endingDate))}}) - Class
                        {{$classes->name}}{{$classes->section}} - {{$subject->title}} -
                        Term({{date('M-y',strtotime($term->startingDate))}}-{{date('M-y',strtotime($term->endingDate))}}
                        )
                    </div>

                    <div class="actions">
                        <a style="color:#fff;"
                           href="{{route('terms',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id])}}"
                           class="btn purple">
                            <i class="fa  fa-arrow-left"></i> Back
                        </a>
                    </div>

                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-full-width table-borderless"
                           id="sample_2">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">
                                Sr.No
                            </th>
                            <th class="col-md-1 text-center">

                                Chapter
                            </th>


                            <th class="col-md-1 text-center">
                                Form

                            </th>

                            <th class="col-md-1 text-center">
                                To

                            </th>


                            <th class="col-md-1 text-center">
                                Status

                            </th>

                            <th class="col-md-1 text-center">
                                Action

                            </th>


                        </tr>
                        </thead>
                        <tbody>


                        @foreach($chapters as $index => $chapter)

                            <tr>
                                <td class="text-center">
                                    {{++$index}}
                                </td>
                                <td class="text-center">

                                    {{$chapter->chapter}}

                                </td>


                                <td class="text-center">

                                    {{$chapter->formPage}}

                                </td>


                                <td class="text-center">

                                    {{$chapter->toPage}}

                                </td>

                                <td class="text-center">


                                    <div class="make-switch switch-mini" data-on-label="&nbsp;Complete&nbsp;&nbsp;" data-off-label="&nbsp;Incomplete&nbsp;User&nbsp;">
                                        <input name="status"
                                               onchange="updateValue({{ $chapter->id.','.$chapter->chapterStatus }})"
                                               type="checkbox"
                                               {{$chapter->chapterStatus==0?"":"checked"}} class="toggle"

                                        />

                                    </div>


                                </td>

                                <td class="text-center">


                                    <a href="#" class="btn btn-xs purple"><i class="fa fa-edit"></i> Details </a>
                                    <a href="#" class="btn btn-xs green"><i class="fa fa-edit"></i> Edit </a>
                                    <button type="button" data-toggle="modal" data-target="#static"
                                            class="btn btn-xs red"><i class="fa fa-edit"></i> Delete
                                    </button>
                                </td>

                            </tr>

                            <div id="static" class="modal fade" tabindex="-1" data-backdrop="static"
                                 data-keyboard="false">
                                <div class="modal-body">
                                    <p>
                                        Are you Sure?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn purple"><i class="fa fa-times"></i> Cancel</button>

                                    <button type="button" onclick="delete_chapter({{$chapter->id}})" class="btn purple"><i class="fa fa-check"></i> Conform</button>

                                    <input  type="hidden" id="{{$chapter->id}}" value="{{route('deleteChapter',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term_id,'chapter_id'=>$chapter->id])}}"
                                       class="btn purple">
                                </div>
                            </div>

                            <meta name="csrf-token" content="{{ csrf_token() }}"/>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@stop

@section('scripts')

    <!--Session.blage.php-->
    <script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/app.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/table-advanced.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootbox/bootbox.min.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/ui-bootbox.js')}}"></script>


    <script src="{{URL::asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/ui-extended-modals.js')}}"></script>










    <script src="{{URL::asset('assets/scripts/app.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/form-components.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/form-validation.js')}}"></script>

    <script src="{{URL::asset('assets/scripts/table-advanced.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fuelux/js/spinner.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clockface/js/clockface.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.input-ip-address-control-1.0.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js')}}"></script>

    <script src="{{URL::asset('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>

    <script src="{{URL::asset('assets/plugins/bootstrap-markdown/lib/markdown.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}"></script>







    <script>
        jQuery(document).ready(function () {
            App.init();
            FormComponents.init();
            TableAdvanced.init();
            UIBootbox.init();
            UIExtendedModals.init();
        });


        function updateValue(i,s) {









            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            if(s==0)
            {

                $.ajax({
                    method: "POST",
                    url: 'http://laravel.dev/chapter/update',
                    data: {status: 1, index: i}
                })
                        .done(function (msg) {
                            alert(msg);
                        });



            }else
                {
                    $.ajax({
                        method: "POST",
                        url: 'http://laravel.dev/chapter/update',
                        data: {status: 0, index: i}
                    })
                            .done(function (msg) {
                                alert(msg);
                            });
                }

        }





        function delete_chapter(id) {

            window.location.href=$('#'+id).val();

        }
    </script>

@stop
