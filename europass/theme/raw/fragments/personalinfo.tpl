<div class="ptl pbl">
  <div class="panel panel-default">
    <h2 class="panel-heading">{str tag='identification' section='artefact.europass'}</h2>
    <div class="panel-body">
        <table border="0" id="personalinformation" class="resumeone fullwidth table">
            <colgroup>
                <col style="width:25%;min-width:110px">
                <col style="width:25%">
                <col style="width:25%">
                <col style="width:25%">
            </colgroup>
            <tbody>
                <tr>
                    <td rowspan="7"><span id="profileicon"><a href="{$WWWROOT}artefact/file/profileicons.php"><img src="{$WWWROOT}thumb.php?type=profileiconbyid&maxsize=100&id={$profileicon_id}" alt=""></a></span></td>
                    <td colspan="3">
                    {if $order == 12}
                    <h3 class="pbs">{$profilefields.firstname} {$profilefields.lastname}</h3>
                    <a class="btn btn-default" href="{$WWWROOT}artefact/europass/preferences.php?set=1&pn=21" title="{str tag='change'} {$order_str}"><span class="icon icon-exchange icon-lg"></span></a>
                    {else}
                    <h3 class="pbs">{$profilefields.lastname} {$profilefields.firstname}</h3>
                    <a class="btn btn-default" href="{$WWWROOT}artefact/europass/preferences.php?set=1&pn=12" title="{str tag='change'} {$order_str}"><span class="icon icon-exchange icon-lg"></span></a>
                    {/if}
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><br />
                    <span class="icon prs"><span class="text-europass icon icon-map-marker icon-lg"></span></span>
                    {if $profilefields.address}{$profilefields.address}{/if}{if $profilefields.town}, {$profilefields.town}{/if}{if $profilefields.city}, {$profilefields.city}{/if}{if $profilefields.country}, {str tag='country.$profilefields.country' section='artefact.europass'}{/if}
                    </td>
                </tr>
                <tr>
                    <td>
                    <span class="icon prs"><span class="text-europass icon icon-phone icon-lg"></span></span>
                    {$profilefields.homenumber}
                    </td>
                    <td>
                    <span class="icon prs"><span class="text-europass icon icon-mobile icon-lg"></span></span>
                    {$profilefields.mobilenumber}
                    </td>
                    <td>
                    <span class="icon prs"><span class="text-europass icon icon-fax"></span></span>
                    {$profilefields.businessnumber}
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                    <span class="icon prs"><span class="text-europass icon icon-envelope icon-lg"></span></span>
                    {$profilefields.email}
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                    <span class="icon prs"><span class="text-europass icon icon-globe icon-lg"></span></span>
                    {if $profilefields.officialwebsite}<a href="{$profilefields.officialwebsite}">{$profilefields.officialwebsite}</a>{/if}
                    {if $profilefields.officialwebsite && $profilefields.personalwebsite}<span class="text-europass"><strong>&bull;</strong></span>{/if}
                    {if $profilefields.personalwebsite}<a href="{$profilefields.personalwebsite}">{$profilefields.personalwebsite}</a>{/if}
                    {if $profilefields.personalwebsite && $profilefields.blogaddress}<span class="text-europass"><strong>&bull;</strong></span>{/if}
                    {if $profilefields.blogaddress}<a href="{$profilefields.blogaddress}">{$profilefields.blogaddress}</a>{/if}
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                    <span class="icon prs"><span class="text-europass icon icon-comment icon-lg"></span></span>
                    {foreach from=$profilefields.socialprofile item=p}
                        {if $p.desc == $profilefields.firstprofile}
                        <span class="text-europass"><strong>{$p.desc}</strong></span>
                        <span><a href="{$p.link}">{$p.title}</a></span>
                        {else}
                        <span class="text-europass"><strong>&bull;&nbsp;{$p.desc}</strong></span>
                        <span><a href="{$p.link}">{$p.title}</a></span>
                        {/if}
                    {/foreach}
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><br />
                        <span class="text-europass"><strong>{str tag='identification-gender' section='artefact.europass'}</strong></span>
                        <span>{if $profilefields.gender}{$profilefields.gender}{/if}</span>
                        <span class="text-europass"><strong>&bull;&nbsp;{str tag='identification-birthdate' section='artefact.europass'}</strong></span>
                        <span>{if $profilefields.dateofbirth}{$profilefields.dateofbirth}{/if}</span>
                        <span class="text-europass"><strong>&bull;&nbsp;{str tag='identification-birthplace' section='artefact.europass'}</strong></span>
                        <span>{if $profilefields.placeofbirth}{$profilefields.placeofbirth}{/if}</span>
                        <span class="text-europass"><strong>&bull;&nbsp;{str tag='identification-nationality' section='artefact.europass'}</strong></span>
                        <span>{if $profilefields.citizenship}{$profilefields.citizenship}{/if}</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <a class="btn btn-default" id="editprofilebutton" href="{$location.profile}" title="{str tag='edit'} {$profile_str}"><span class="icon icon-pencil icon-lg prs"></span> {str tag='edit'} {$profile_str}</a>
        <a class="btn btn-default" id="editresumebutton" href="{$location.resume}" title="{str tag='edit'} {$resume_str}"><span class="icon icon-pencil icon-lg prs"></span> {str tag='edit'} {$resume_str}</a>
    </div>
  </div>
</div>
