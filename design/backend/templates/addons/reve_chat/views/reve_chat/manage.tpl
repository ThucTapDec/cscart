{** groups section **}
{capture name="mainbox"}

    {capture name="tabsbox"}
        <div id="content">
            <div id="sh_dev_info">
                <h3 class="panel-title">Developer Info</h3>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>REVE Chat</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>product@revechat.com</td>
                    </tr>
                </table>
            </div>
            <form action="{""|fn_url}" method="post" name="revechat-admin-settings-form"
                  id="revechat-admin-settings-form"
                  class="form-edit form-horizontal cm-processed-form cm-check-changes">
                {if $reve_chat.aid == 0}
                    <input type="hidden" name="dispatch" value="reve_chat.manage">
                    <input type="hidden" name="type" value="reve_chat_install">
                    <div class="revechat_choose_form">
                        <h4>{__("already_have_a_reve_chat_account")}</h4>
                        <div class="radio">
                            <label>
                                <input type="radio" name="revechat_choose_form" id="has_revechat_account"
                                       checked="checked">{__("yes_already_have_reve_chat_account")}
                            </label>
                        </div><!-- radio -->
                        <div class="radio">
                            <label>
                                <input type="radio" name="revechat_choose_form"
                                       id="new_revechat_account">{__("no_reve_chat_account")}
                            </label>
                        </div><!--radio-->

                    </div>

                    <div id="edit-ajax-message" class="form-item form-type-item">
                        <p class="ajax_message"></p>
                    </div>

                    <div class="reve_chat_fields">
                        <div id="revechat_already_have">
                            <h4 style="margin-left: 20px;">{__('reve_chat_account_details')}</h4>
                            <div class="control-group">
                                <label class="control-label"
                                       for="edit-revechat-account-email">{__("reve_chat_email")} :</label>
                                <div class="controls">
                                    <input type="email" value="" name="email"
                                           id="edit-revechat-account-email" placeholder="Enter your email address">
                                    <input type="hidden" name="revechat_aid" value="0">
                                </div>
                            </div>
                        </div> <!--reve_chat_already_have -->

                        <div id="revechat_new_account">
                            <h4>{__("create_new_reve_chat_account")}</h4>
                            <div class="control-group">

                                <label for="edit-firstname" class="control-label">{__("firstname")} <span
                                            class="required">*</span></label>

                                <div class="controls">
                                    <input type="text" id="edit-firstname" name="edit-firstname"
                                           placeholder="{__("firstname")}">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-lastname" class="control-label">{__("lastname")} <span
                                            class="required">*</span></label>

                                <div class="controls">
                                    <input type="text" id="edit-lastname" name="edit-lastname"
                                           placeholder="{__("lastname")}">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-email" class="control-label">{__("email")} <span
                                            class="required">*</span></label>

                                <div class="controls">
                                    <input type="text" id="edit-email" name="email"
                                           placeholder="{__("email")}">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-accountpassword" class="control-label">{__("create_password")} <span
                                            class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" id="edit-accountpassword"
                                           name="edit-accountpassword" placeholder="{__("create_password")}">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-retypepassword" class="control-label">{__("retype_password")} <span
                                            class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" id="edit-retypepassword"
                                           name="edit-retypepassword" placeholder="{__("retype_password")}">
                                </div>
                            </div>

                        </div>
                        <div class="control-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                {else}
                    <div style="border:1px solid #e5e5e5; box-shadow:0 0 3px rgba(0,0,0,.2); padding: 20px;">

                        <h3>{__("reve_chat_installed")}</h3>
                        <p>{__("reve_chat_start_chatting_with_your_customer")}</p>
                        <p><a href="https://dashboard.revechat.com" class="btn btn-warning" target="_blank">{__("reve_chat_go_to_dashboard")}</a></p>
                        <input type="hidden" name="dispatch" value="reve_chat.manage">
                        <input type="hidden" name="type" value="reve_chat_remove">

                        <p><small>Something went wrong? <input type="submit" value="Disconnect" style="background: transparent; border: 0; text-decoration: underline;text-transform: lowercase; font-size: 10px; cursor: pointer; box-shadow:none;"></small></p>
                    </div>
                {/if}
            </form>
            <!--content-->
        </div>
    {/capture}
    {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$link_to}

{/capture}
{include file="common/mainbox.tpl" title="{__("reve_chat")}" content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons}
{script src="js/addons/reve_chat/reve_chat_admin.js"}
{** groups section **}