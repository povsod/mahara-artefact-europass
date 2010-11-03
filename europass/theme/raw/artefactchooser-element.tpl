    <tr>
        <td style="width: 20px;" rowspan="2">
            {$formcontrols|safe}
        </td>
        <th><label for="{$elementname}_{$artefact->id}" title="{$artefact->title|strip_tags|substr:0:60|escape}">{str tag=$artefact->artefacttype section=artefact.europass}</label></th>
    </tr>
    <tr>
        <!-- <td>{$artefact->description|str_shorten_html}</td> -->
    </tr>
