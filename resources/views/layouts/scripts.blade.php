<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
<!--dropify-->
<script type="text/javascript" src="{{asset('js/dropify.min.js')}}"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{asset('js/materialnote.js')}}"></script>
<!--tostr-->
<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
<script>

    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}")

    @endif


    @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}")

    @endif
</script>

<script>
    var editor_config = {
        path_absolute : "/",
        height : "300",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

<script type="text/javascript">


    function testAnim(x) {
        $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    };

    $(document).ready(function(){
        $('.js--triggerAnimation').click(function(e){
            e.preventDefault();
            var anim = $('.js--animations').val();
            testAnim(anim);
        });

        $('.js--animations').change(function(){
            var anim = $(this).val();
            testAnim(anim);
        });
    });


</script>