{if ($reve_chat.is_reve_chat_active)}
    <!-- Start of REVE Chat Script-->
    <script type='text/javascript'>
	{literal}
    
 window.$_REVECHAT_API || (function(d, w) { var r = $_REVECHAT_API = function(c) {r._.push(c);}; w.__revechat_account={/literal}'{$reve_chat.reve_chat_aid}'{literal};w.__revechat_version=2;
   r._= []; var rc = d.createElement('script'); rc.type = 'text/javascript'; rc.async = true; rc.setAttribute('charset', 'utf-8');
   rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?'+new Date().getTime();
   var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(rc, s);
 })(document, window);

{/literal}
    </script>
    <!-- End of REVE Chat Script -->

{/if}