

<!DOCTYPE html>
<html lang="ja">

<head>
<!-- Re:roots連携 -->
<script>
  const reroots = function() {
    function getParam(p) {
      let match = RegExp('[?&]' + p + '=([^&]*)').exec(location.search);
      return match && match[1];
    }
    function addClid() {
      let clids = [{param:'gclid',name:'g'},{param:'yclid',name:'y'}];
      let name = 'reroots_clid';
      clids.forEach(function(clid) {
          let clidParam = getParam(clid.param);
          if (clidParam) {localStorage.setItem(name, clid.name+'_'+clidParam);}
      });
    }
    addClid();
  }
  addEventListener('load', reroots);
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRT84R9');</script>
<!-- End Google Tag Manager -->