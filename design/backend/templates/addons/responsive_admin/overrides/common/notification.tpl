{if !"AJAX_REQUEST"|defined}

{capture name="notification_content"}
{strip}
    {foreach from=""|fn_get_notifications item="message" key="key"}
        {if $message.type == "I"}
            <div class="cm-notification-content cm-notification-content-extended notification-content-extended {if $message.message_state == "I"} cm-auto-hide{/if}" data-ca-notification-key="{$key}">
                <h1>{$message.title}<span class="cm-notification-close close {if $message.message_state == "S"} cm-notification-close-ajax{/if}"></span></h1>
                <div class="notification-body-extended">
                    {$message.message nofilter}
                </div>
            </div>
        {else}
        <div class="alert cm-notification-content{if $message.type == "N"} alert-success{elseif $message.type == "W"} alert-warning{elseif $message.type == "E"} alert-error{elseif $message.type == "S"} alert-info{/if} {if $message.message_state == "I"} cm-auto-hide{/if}" id="notification_{$key}" data-ca-notification-key="{$key}">
            <button type="button" class="close cm-notification-close{if $message.message_state == "S"} cm-notification-close-ajax{/if}" {if $message.message_state != "S"}data-dismiss="alert"{/if}>&times;</button>
            <strong>{$message.title}</strong>
            {$message.message nofilter}
        </div>
        {/if}
    {/foreach}
{/strip}
{/capture}

{if $view_mode == "simple"}
    {$smarty.capture.notification_content nofilter}
{/if}

<div class="cm-notification-container cm-sticky-scroll alert-wrap {if $view_mode == "simple"}notification-container-top{/if}" data-ce-top="20" data-ce-padding="109">
    {if $view_mode != "simple"}
        {$smarty.capture.notification_content nofilter}
    {/if}
</div>

{/if}

{include file="common/license.tpl"}
