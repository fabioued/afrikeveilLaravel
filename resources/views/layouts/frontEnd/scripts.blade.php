<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/mgalante/jquery.redirect/master/jquery.redirect.js"></script>
<script async defer src="{{asset('js/frontEnd/maps.js')}}" type="text/javascript"></script>
<script src="{{asset('js/frontEnd/plugins.js')}}"></script>
<script src="{{asset('js/frontEnd/plugins2.js')}}"></script>
<script src="{{asset('js/frontEnd/custom.js')}}"></script>
<script src="{{asset('js/frontEnd/html5lightbox/html5lightbox.js')}}"></script>
<!--scrollPress JS BACK TO TOP-->
<script src="{{asset('js/frontEnd/scrollPress.js')}}"></script>
<script src="{{asset('js/frontEnd/jquery.polyglot.language.switcher.js')}}" type="text/javascript"></script>

<!--Push Notifications-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
<!--tostr-->
<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
<script>

    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}");

    @endif


    @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}");

    @endif
</script>
<script>

    /*function changeLangFr() {
     //alert('hey');
     var url = window.location.pathname;
     url = url.replace('/en', '/fr');
     var lang = url.substr(12,2);
     var search= window.location.search;
     //url += search;
     //alert(url);
     //alert(url.substr(15,6));
     if(lang!= "fr"){
     window.location = url;
     }
     if(search!= '' && url.substr(15,6)==="single"){
     var href = url+search;
     window.location = '/afrikeveil/fr/single.php'+search;;
     }
     }
     function changeLangEn() {
     //alert('hey');
     var url = window.location.pathname;
     url = url.replace('/fr', '/en');
     var search= window.location.search;
     var lang = url.substr(12,2);
     if(lang!= "en"){
     window.location = url;
     }
     if(search!= '' && url.substr(15,6)==="single"){
     var href = url+search;
     window.location = '/afrikeveil/en/single.php'+search;;
     }
     }*/
    $(document).ready(function() {
        $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
            effect: 'fade',
            testMode: true,
            onChange: function(evt) {
                var url= window.location.href;
                var lang= evt.selectedItem;
                var search= window.location.search;
                switch(lang){
                    case "fr":
                        url = url.replace('/en', '/fr');
                        url += search;
                        window.location.href = url;
                        break;
                    case "en":
                        url = url.replace('/fr', '/en');
                        url += search;
                        window.location.href = url;
                        break;
                }
            }
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51805819-5', 'auto');
    ga('send', 'pageview');

</script>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "https://afrikeveil.org",
      "name": "Afrieveil",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+226-25-666460",
        "contactType": "Ouagadougou Office"
      }
    }
    </script>
<!--script type="text/javascript">
       $(document).ready(function() {
           $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
               effect: 'fade',
               testMode: true,
              onChange: function(evt) {
               var url= window.location.pathname;
               var lang= evt.selectedItem;
               var search= document.links[0].search;
               switch(lang){
                   case "fr":
                       url = url.replace('/en', '/fr');
                       //url += search;
                        window.location.href = url;
                       if(search!= ''){
                           window.location.href='http://afrikeveil.org/fr/single.php?post=2';
                       }
                    break;
                    case "en":
                       url = url.replace('/fr', '/en');
                       url += search;
                        window.location.href = url;
                       if(search!= ''){
                           //alert('post area is'+search);
                           var href = "http://afrikeveil.org/fr/single.php";
                           window.location.href=href+search;
                       }
                    break;
                   }
               }
           });
       });
   </script-->
