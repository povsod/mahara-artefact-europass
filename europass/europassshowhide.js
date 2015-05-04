/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2015 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

addLoadEvent(function() {
    forEach(getElementsByTagAndClassName('table', 'europasslanguage', 'bottom-pane'), function(i) {
        forEach(getElementsByTagAndClassName('tr', null, getFirstElementByTagAndClassName('tbody', null, i)), function(tr) {
            console.log(tr);
            var title = getFirstElementByTagAndClassName('div', 'jstitle', tr);
            var description = getFirstElementByTagAndClassName('div', 'jsdescription', tr);

            if (!description.childNodes.length) {
                return;
            }

            var td = getFirstParentByTagAndClassName(title);

            var a = A({'href': ''});
            connect(a, 'onclick', function(e) {
                e.stop();
                if (getStyle(description, 'visibility') == 'hidden') {
                    setStyle(description, {
                        'visibility': 'visible',
                        'height': 'auto'
                    });
                }
                else {
                    setStyle(description, {
                        'visibility': 'hidden',
                        'height': '0'
                    });
                }
            });

            replaceChildNodes(title, appendChildNodes(a, title.childNodes));
        });
    });
});

var styleNode = createDOM('link', {
    'rel' : 'stylesheet',
    'type': 'text/css',
    'href': config['wwwroot'] + 'artefact/europass/europass.css'
});
appendChildNodes(getFirstElementByTagAndClassName('head'), styleNode);
