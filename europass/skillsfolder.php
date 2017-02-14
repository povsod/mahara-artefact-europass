<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

define('INTERNAL', true);
define('MENUITEM', 'content/europass');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');
define('SECTION_PAGE', 'index');
define('EUROPASS_SUBPAGE', 'skillsfolder');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
define('TITLE', get_string('europass', 'artefact.europass'));
define('SUBSECTIONHEADING', get_string('esp-tab',  'artefact.europass'));
safe_require('artefact', 'europass');
safe_require('artefact', 'file');

if (!PluginArtefactEuropass::is_active()) {
    throw new AccessDeniedException(get_string('plugindisableduser', 'mahara', get_string('europass','artefact.europass')));
}

$delete = param_integer('delete', 0);
$edit = param_integer('edit', 0);

/*
 *  Delete file from Skills passport
 */
if ($delete > 0) {
    $artefact = artefact_instance_from_id($delete);
    if (!$USER->can_edit_artefact($artefact)) {
        throw new AccessDeniedException(get_string('accessdenied', 'error'));
    }

    $form = pieform(array(
        'name'       => 'deletefile',
        'method'     => 'post',
        'class'      => 'form-delete',
        'plugintype' => 'artefact',
        'pluginname' => 'europass',
        'renderer' => 'div',
        'configdirs' => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/file/form/'),
        'elements'          => array(
            'submit' => array(
                'type'  => 'submitcancel',
                'class' => 'btn btn-default',
                'value' => array(get_string('delete'), get_string('cancel')),
                'goto'  => get_config('wwwroot') . 'artefact/europass/skillsfolder.php',
            ),
        ),
    ));

    $smarty = smarty();
    $smarty->assign('PAGEHEADING', TITLE);
    $smarty->assign('subheading', get_string('deletefile', 'artefact.europass'));
    $smarty->assign('form', $form);
    $smarty->assign('message', get_string('deletefileconfirm','artefact.europass'));
    $smarty->display('artefact:europass:delete.tpl');
    exit;
}

/*
 *  Edit file from Skills passport
 */
if ($edit > 0) {
    $artefact = artefact_instance_from_id($edit);
    if (!$USER->can_edit_artefact($artefact)) {
        throw new AccessDeniedException(get_string('accessdenied', 'error'));
    }

    $form = pieform(array(
        'name'       => 'editfile',
        'method'     => 'post',
        'class'      => 'form-group',
        'jsform'     => false,
        'plugintype' => 'artefact',
        'pluginname' => 'europass',
        'configdirs' => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/file/form/'),
        'elements' => array(
            'title' => array(
                'type'  => 'text',
                'title' => get_string('name'),
                'rules' => array('required' => true),
                'defaultvalue' => $artefact->get('title'),
            ),
            'description' => array(
                'type'  => 'text',
                'title' => get_string('description'),
                'defaultvalue' => $artefact->get('description'),
            ),
            'tags' => array(
                'type'        => 'tags',
                'title'       => get_string('tags'),
                'description' => get_string('tagsdescprofile'),
                'help'        => true,
            ),
            'allowcomments' => array(
                'type'  => 'switchbox',
                'title' => get_string('comments', 'view'),
                'defaultvalue' => $artefact->get('allowcomments'),
            ),
            'submit' => array(
                'type'  => 'submitcancel',
                'class' => 'btn btn-success',
                'value' => array(get_string('savechanges', 'artefact.file'), get_string('cancel')),
                'goto'  => get_config('wwwroot') . 'artefact/europass/skillsfolder.php',
            ),
        ),
    ));

    $smarty = smarty();
    $smarty->assign('PAGEHEADING', TITLE);
    $smarty->assign('subsectionheading', get_string('editfile', 'artefact.europass'));
    $smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
    $smarty->assign('form', $form);
    $smarty->display('artefact:europass:form.tpl');
    exit;
}

/*
 *  Display Skills passport
 */
if (!$parent = get_field('artefact', 'id', 'artefacttype', 'folder', 'note', 'skillsfolder', 'owner', $USER->get('id'))) {
    $data = array(
        'owner' => $USER->get('id'),
        'title' => get_string('skillsfolder', 'artefact.europass'),
        'description' => get_string('skillsfolderdesc', 'artefact.europass'),
        'note' => 'skillsfolder',
    );
    $artefact = new ArtefactTypeFolder(0, $data);
    $artefact->commit();
    $parent = $artefact->get('id');
}

// Get skills folder data: files from that folder
$skillsfolder = new ArtefactTypeFolder($parent);
$files = $skillsfolder->folder_contents();


$form = array(
    'name'       => 'fileupload',
    'method'     => 'post',
    'class'      => 'form-group fileupload',
    'jsform'     => false,
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'configdirs' => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/file/form/'),
    'elements'   => array(
        'file' => array(
            'type' => 'file',
            'title' => get_string('skillsfolderupload', 'artefact.europass'),
            'description' => get_string('skillsfolderuploadmaxsize', 'artefact.europass'),
            'rules' => array('required' => true),
            'maxfilesize'  => 2621440, // 2.5 MB
            'accept' => 'image/jpeg,image/jpg,image/pjpeg,image/png,image/x-png,application/pdf,application/x-pdf'
        ),
        'upload' => array(
            'type'  => 'submit',
            'class' => 'btn btn-success',
            'value' => get_string('upload'),
            'goto'  => get_config('wwwroot') . 'artefact/europass/skillsfolder.php',
        ),
    ),
);
$form = pieform($form);


$css = array(
    '<link rel="stylesheet" type="text/css" href="' . get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/style.css">',
);

$smarty = smarty(array(), $css);
$smarty->assign('form', $form);
$smarty->assign('files', $files);
$smarty->assign('europasslang', $USER->get_account_preference('europasslang'));
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->assign('minilogo', $THEME->get_url('static/images/europass-logo-mini.png', false, 'artefact/europass'));
$smarty->assign('rightlogo', $THEME->get_url('static/images/rightlogo.png', false, 'artefact/europass'));
$smarty->display('artefact:europass:skillsfolder.tpl');


$filesize = 0;
function fileupload_validate(Pieform $form, $values) {
    global $USER, $filesize;
    require_once('file.php');
    require_once('uploadmanager.php');

    $um = new upload_manager('file');
    if ($error = $um->preprocess_file()) {
        $form->set_error('file', $error);
        return false;
    }

    $allowedtypes = array(
        'image/jpg',
        'image/jpeg',
        'image/png',
        'application/pdf',
        'application/x-pdf'
    );
    if (!in_array($um->file['type'], $allowedtypes)) {
        $form->set_error('file', get_string('filenotaccepted', 'artefact.europass'));
        return false;
    }

    $filesize = $um->file['size'];
    if (!$USER->quota_allowed($filesize)) {
        $form->set_error('file', get_string('uploadexceedsquota', 'artefact.file', get_config('wwwroot')));
        return false;
    }

    // Check the image file isn't greater than the max allowable size
    list($type, $subtype) = explode("/", $um->file['type']);
    if ($type == "image") {
        $imageinfo      = getimagesize($values['file']['tmp_name']);
        $width          = $imageinfo[0];
        $height         = $imageinfo[1];
        $imagemaxwidth  = get_config('imagemaxwidth');
        $imagemaxheight = get_config('imagemaxheight');
        if ($width > $imagemaxwidth || $height > $imagemaxheight) {
            $form->set_error('file', get_string('profileiconimagetoobig', 'artefact.file', $width, $height, $imagemaxwidth, $imagemaxheight));
        }
    }
}

function fileupload_submit(Pieform $form, $values) {
    global $USER, $filesize, $parent;
    safe_require('artefact', 'file');

    try {
        $USER->quota_add($filesize);
    }
    catch (QuotaException $qe) {
        $form->json_reply(PIEFORM_ERR, array(
            'message' => get_string('uploadexceedsquota', 'artefact.file', get_config('wwwroot'))
        ));
    }

    // Entry in artefact table
    $data = new stdClass;
    $data->owner = $USER->id;
    $data->parent = $parent;
    $data->title = $values['file']['name'];
    $data->title = ArtefactTypeFileBase::get_new_file_title($data->title, (int)$data->parent, $USER->id);  // unique title
    $data->size = $filesize;
    $data->filetype = $values['file']['type'];

    list($type, $subtype) = explode("/", $data->filetype);
    if ($type == "image") {
        $imageinfo    = getimagesize($values['file']['tmp_name']);
        $data->width  = $imageinfo[0];
        $data->height = $imageinfo[1];

        $artefact = new ArtefactTypeImage(0, $data);
    }
    else {
        $artefact = new ArtefactTypeFile(0, $data);
    }
    if (preg_match("/\.([^\.]+)$/", $values['file']['name'], $saved)) {
        $artefact->set('oldextension', $saved[1]);
    }
    $artefact->commit();

    $id = $artefact->get('id');

    // Move the file into the correct place.
    $directory = get_config('dataroot') . 'artefact/file/originals/' . ($id % 256) . '/';
    check_dir_exists($directory);
    move_uploaded_file($values['file']['tmp_name'], $directory . $id);

    $USER->commit();

    $result = array(
        'error'   => false,
        'message' => get_string('fileuploadcomplete', 'artefact.europass'),
        'goto'    => get_config('wwwroot') . 'artefact/europass/skillsfolder.php',
    );
    $form->reply(PIEFORM_OK, $result);
}


function deletefile_submit(Pieform $form, array $values) {
    global $SESSION, $artefact;

    $artefact->delete();
    $SESSION->add_ok_msg(get_string('filedeletedsuccessfully', 'artefact.europass'));

    redirect('/artefact/europass/skillsfolder.php');
}


function editfile_submit(Pieform $form, array $values) {
    global $SESSION, $artefact;

    $artefact->set('title', $values['title']);
    $artefact->set('description', $values['description']);
    $artefact->set('tags', $values['tags']);
    $artefact->set('allowcomments', (int)$values['allowcomments']);
    $artefact->commit();
    $SESSION->add_ok_msg(get_string('filechangedsuccessfully', 'artefact.europass'));

    redirect('/artefact/europass/skillsfolder.php');

    $result = array(
        'error'   => false,
        'message' => get_string('filechangedsuccessfully', 'artefact.europass'),
        'goto'    => get_config('wwwroot') . 'artefact/europass/skillsfolder.php',
    );
    $form->reply(PIEFORM_OK, $result);
}
