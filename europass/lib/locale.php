<?php

// Get array of locales (= options), which are supported by Europass CV and LP creation tools
function getoptions_locales() {
	return array(
		'bg_BG' => array('value' => get_string('locale.bg_BG', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAADmSURBVHjapJM9TsQwEIW/SeIsIUCklaBBXAWuxFnoqDkOHRegQEgIpAUWlMTD2kNBoixdfl4zcvG+8dhvxMxYIgFy4KirU6TAdwZUZvY6q7vIWQKUCyYoEyBdAEgTgBDCZGfvyQCu7q45rdZsfY1hey8s/869qlXJ2+dmADSt59Fe2Go9qvtJfkjqbR9Qk7gV0eIowC7u0NYPgNubey5cTmyaUYCkKHj6US57QKuKZQ5ERgHMjFZ1uIH3Hg4KxLlxXxDjn6cDaDDj4eN9Tg5UgAo4B44nmr+AZ+mSmM9IZABUlq7z7wChM1nCssShPAAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'cs_CZ' => array('value' => get_string('locale.cs_CZ', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFySURBVHjapJOxSlxBFIa/uXN3Je5qQNgqASsRUukLWAhpfIDkDQKWNiFtCpGkkoCFnV2qFBaixa5KsDEpg0VEViRGQ1Bc9xrmztydOSl20cVlFy/+zTTnfJxz5v+ViPAYKaAIlDtvHjngBqDyfmVPGk0reQVUYqBU2z5EK+HV3AsmxsfyTFGKAJ0VNMcnV7z7UOPzxgEtHx4K0BGAdY6GybhMLKtr31hYqvLrT3Ngp/cegAjAGMdFw3D9z9JoBb7u1Xm9sM6X3eP+F3QOgLgNMBydeK4TC4AoDec37L95y3TrR09zNDpKsz18B5CmSBwTRBBinohj0ezw0tUR6+hxio4xhDuAtSmaYbzEVELCcrLFVOtvu7gQo+6bJ1K4zHcB0pShYpFJf8anZJPnIQGl+u4vIqTdN7AZzKR1PpoqZZ2BLgz+vBCw1t4C3Gz6k/mr75xKwKkol50V8BR4BozkzEIC/FaA7gRJ5wR4wKnHxvn/AAhx0NcPUPgiAAAAAElFTkSuQmCC) no-repeat left center; padding-left: 20px;'),
		'da_DK' => array('value' => get_string('locale.da_DK', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAEmSURBVHjapJMxT8MwEIU/104hKqiCgYFKDJQJgdhZ+A8wwE+EAf5JB2AEIVQoA0NbGpTaDs4x0KYVKUhR3+Lz+d6TfX6nRIRloIA6sDZZq8ADnwZo9k7P3+dPtq8vi/jt7OJPhdbN1ZYBGhICK0eHC4vqB/u/rqwQBHd7D9AwgJYsQ5KE0B+UBL6euz8PnYPe3ECyDEAbgOAc+ceIfDQqCeRJOae0Jjhb7NtpmkpVpGkqQLsG4Jyr/H1TTg3AWltZYMoxAA/HJ9ioTj4eA7DbfSwKn3b2SuRaHPOS+ZmA9R4xESi1wGrlnIhg/ZyAcw5WY1QUlfkLcuR50QMD+CDC3XDmgX6nU8Svw8G/dlZAE2gB6xX7mAA9BejJIOmKAgHwatlx/h4AKJemRnPSNOoAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'de_DE' => array('value' => get_string('locale.de_DE', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAENSURBVHjapJNNTsMwEIW/cdIKKZQIVWJT9hwgFyC3hVP0BGXDFnawQURRAsg/jW0WTSjdue1sLFt+bz7ZbyTGyDklwBy4HNdjygHfOVDWdf1xSvf1en2TA4X3nqqq0pBFiDGy2WwAihzInHP0fU/TNAeXp/cRkYPz5XKJcw4gywGstbRtS9u2SRRKKay1AOQAD1pRfGpCt4X/vyJyuJ8MouZHK+4mA6M185dXQtenEZRXmFm+JzDGsIgQQ0gyiMOA8cPe4PrRsLqdQUgMlfIMb1u4/yNwELMxVykIYaeZCKzdAhcgqWGMo2Zn4AYfeHruTgmjE6AEVsDiSPEX8C5ANg5SdqSBB5ycO86/AwCO1XbNM5YIzAAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'el_GR' => array('value' => get_string('locale.el_GR', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAE3SURBVHjapJOxSgNBEEDfspsoiSaSIgat5CwsRCT2goqNnb9h4S+olSiWFjZWthYKaiUJaH7A6kRitJEjigiJXsjlzrGJuSJBueQ1y7Izw5vdHSUiDIIC4sBIe42CB3waIL10VHil6VPYXAVg+fAaYhq+/7YrbqxkDZAMGi0WJsY6B/PZFCqmWZ/N9VQW4K32RRGSCrBEpNxX/0pNG4AgCNBadwWsHd/0TMwk4jy/1zp7a2brVBb3r+SXue0zye9dyl+4riuAZQBaBJTrjU7FR7eJ8QNyO+co1W2QGo5hWmG85TiORMVxnNAgf3CByYzjev7/NyeQGDL4H9XQwLbtyAa2bYcGJ7d3TFWbkZ7w6eEeAAN4u6UKlCr9fAVPAWlgEhiNmFwHXhSg24OkIxYIAE8NOs4/AwC7uO3xQbABsAAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'en_GB' => array('value' => get_string('locale.en_GB', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAJJSURBVHjapJNdSJNRGMd/Z3u3OTXXhx8xjRLDFWIk0jAk6WYYfaAZSUWGZkFdRNRFYAYFXhkI2gpKqISC1IsIUiKIchUEUQiuj4uiMT8m0wbNr+n2vu/p4l2K3Yn/m3Pg8Pye8/wf/kJKyWokACuQnjxXojgwowCOwPW2iS37y3k0bOfJwwHmYzFePK5n7Oxl0FRyH9zicGM3CZOFBhccypMox2tJdWZnK0Bay/AGmr+McmJvKUXbaul79hmTzYJ9x3bQdEw2C2V7XOzLUdmVZ2PWvZvm1lcAaQpg/vY9xL2NRdRMvqHUlYmzoRw9oREPjICqoic0qtIiFGVmECp20+kd4IPPD2AWQMFMcOSnxWZDavqyIcfOXARVJ7fLu9w4s4nEwgLpmzdtVQB+HW0kNcOBFo3Cv6VICWYTSEmw6hSYBOjGo7LOwdz0lHEHiMVimCciaNEpRLIWqSMUxWCpKgiBEAIJqI4M5tLtS4Cs++3kZGUlK5cUcFciEwkKBl//t3xBeHIS3KWYAEo87biruxiKWkh568N/447RWZdI3fAlMG8l5Z2PT00deOq6KfHcBjAA+YVO+p6eo8zXy/P+r9R9tCcbCQQCgIMHOuh3llFx2kNn/jjFhWuXAN6rFay/66XtZZjG9zrh0KjxVasCNgsAs9N/OHnkJq0/HLjOH+NadmjRg7jW00tnWOPKQGRxzEH/EOM7XUhNI+of4nckCEDThRaCl2qor66E/p64ABxALrBmhVmYBsYEYE4GybxCgAbExWrj/HcACIPUyGtYcDcAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'es_ES' => array('value' => get_string('locale.es_ES', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFzSURBVHjapJNNS1tBFIafkxnzoSZpsI1gFoLUP9CCm65KF+79df0H/QmlIARcudGFK0GCKJhFJX7cxNyZuXdmusiNGqngxQPDOQxzXt55OEdijLwnBKgCq0UuEw6YaKA9/L77N+IRVCmFjf6frgZW8Dn1r1/e6FkgRuzRMcCKBlR0GSEZ40ejxcdzPiIL12ptjegyAKUB1n871NItxDusXWJ6JzS7OVrCKy4q+MxBBzSAy1Ia+oZpcs9tX/Fw3sH+yGhvJzRqMkP9kmCeAoWANSmN2oD8sstw/4L4aY/WfcBf/4SN5D8O2thUA1ABMCYFMiq+Reuz5vzwF+nRARX/AQggYZbnR7Kip3BgjIWguNlK+Nis8m3TkvfOmPZqLMfwBHMe3mNM/iQw2DFIfZloThkTmX96AkwWAMxqqQcGxj5j4DJiNUD1bcMYQ8A69yjgfAycjEfITK/UOAvQBnpAs2TzGLgSQBWLpEoKeMDJe9f53wBKAZ093TMjpwAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'et_EE' => array('value' => get_string('locale.et_EE', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAECSURBVHjapJMxTsQwEEWfEweKXZRAkYYKbcstOAbHoKTmKNScgCOko4zkiiYFyEuUxF4nQ0HCshJFsvsby5b/m2+NR4kIp0gBZ8B6XJfIA7UG0vun1+qY6s+Pd7kGVv0g3N5czYusQATezAfASgPxLgh1E/is3cFlQcZ3qoPzy/U5uyAAsQZw3mMbx7bxs1JE0Y8HQAOULw9s8xxrLX+7opTivy5lWUZVVXtA27aUZYm1dlaCNE1JkmQP6LoOEWEYhlmAEAJ93//uN8YYWSpjjACbaEqwVJMnAnDOLQZMHg34EAJFURzzGb0CUuAauFho/gLeFRCPgxQvBPSAV6eO8/cA4/aiQh6tFVEAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'fr_FR' => array('value' => get_string('locale.fr_FR', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFESURBVHjapJM7TsNAEIa/9RqjKECEkGgoKOgoaHKCdByBc3APDsIRaHID01ASRTxEgxI5zsvetb1DkcSJCUaKMtJqZzSrb2f/nVEiwj6mgAA4Wu67mAWmPtDqdB6+f2e73ftK3L+92yJcPT2e+0CzKBzt9uW/1zVurpc1KxBh/vwC0PQBbW3BeJwyHE5rAebto/T9s1MkywC0D2CMJYpmRNG8FuBG49IvPE1u0wUMIEkMg8GMOJ5T9yn5KC59AWxiNgEJvV5GHCf1kvffS1+3Tkh9bw1I0wSRBs65ehU3cpJlpJnbBBi0PsS5+qaSFUBAihyTWwC8hYgG50ApVa6tjlvlPAVOSIxdV2CtJQiEIPDrnxAcVKoxdi2iFSmYTD4r58MwrMSvcfSntgpoARfA8Y6zMAG+FKCXg6R3BBSAVfuO888AocKXohfLXWQAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'hr_HR' => array('value' => get_string('locale.hr_HR', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAGvSURBVHjapJO/bhNBEMZ/u3s+fLZDhEEBERBFoAiKKGgoSBcpEkjQ5g0iISHxCslDpIGCmoqHoADpCoSQIoVQWPyRosgccWyfb9feGwonl7t0Jl/zrXa++XZmNaNEhItAASHQOuFZ4IBBAMz/fPL8UNejUizHiKBE0CLkSjFRGpSuOCy+f7cQAE2ZeMKV+9NbEcbNiK6eY9SqAxANMtp5n9pwhNIaEcF++QrQDADDeIzvdpn8SQDYXX1MrK/TODqgdzuiHlzmoYUH8Wd8YDBX2/jjYwATAEysxRz1yHs9AJqp8IwfNMihMyANQ/qEuOFgWqUxeGuLVpbSNJUykjiWzqNVEZGCkziuaNI0FWBJA9iSG4DPMu58+sD3hVsF+yyraE5zNEB2LogI+9ducvfwV8Gcm5fTnABg+ekO5lKb4WhcCDbXNnl55Qb3/h7wamOL13sN4OP0j6Ia3iZnBjbLqNcEVXrhzV4Dtf4CNran5/KU5IItV+CcI8yFsGYqbbz91gIFoRHQqmLgnCsMnEhOP+n8zyo4BcwDi8DcjMl94LcCzMkimRkNPODURdf53wBKN975O564GAAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'is_IS' => array('value' => get_string('locale.is_IS', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAF0SURBVHjapJNNLwNRFIaf6Z1WmlJCgrCQEPG5ILG0KYmNpY2w4j/4FfaWrIiNn8AvMLGyI76NSMpomfbeztxr0ZpWW5Kmb3Jzcz5yznvve45ljKEdWEAC6KzcrUABnzbQvbR1+FobOd3f4HltnaGTY5a3j/6scHaw2W8DqSAwLMwM/gomZqcBmJsYaORs4PzyBSBlA6IUhHx8SrJeIcoL7u4BuH70sOo69/UkKQUhgLABpCzh5SVeXkZJOpcD4KPG9wMhYkhZiuwx3/dNPR4yK+Y/+L5vgDEb4GoxQzrUUdcf3IxONv28WDpNTsSqDFzXbehwPTL+LwPXdasMplb3EB29fBXK7ypc7IDWACTndxsYpJJxQvlWZgMgi0W0NlgVlcpyWZFq9UdrgywWAbABlFIktCERF1W54/HyPNT4IoW0QSkVFVBGa/LZ2yjBcRwevXfeHOeXv9k4W0A3MAx0tbgLeeDJAkRlkUSLBUJAWe2u8/cA98bqGC97rHcAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'it_IT' => array('value' => get_string('locale.it_IT', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAE+SURBVHjapJM9TsNAEIW/jW1ACiSCIk1KOoTEVRA03AauQwGcJAWiRhDEnyhCYhNnf+wdilhxDHakKCOtdkajfftm5o0SETYxBWwBu8W9jlngJwS6Z3dXX3+zN6eXlfj9/OIfQv/2uhcC7dznnPQOV363dXxUUFYIgrl/AGiHQOB8RmJTRjppBMiGLws/ONhHnAMIQgDjHBM9JdbTRgAfx2XjgoDcaABCAG00I5MQ2xShfip+PCkDAatNCTDThif5JLZpIwP3PFz4rU4HHbSWAVJa0TZefCOA+DLnM8fM+qUStCZqR/hVoloCUC7DODtnA/N6RDyqUJaqlZxaHBFBW1syMNaygxDNh1Iv2SiqsDGmbKKV3DN+/Kg8GAwGlfh1/F0rZwV0gT6wt+YuJMCbAoJikYI1AXLAqk3X+XcArNyT5mhM57UAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'lt_LT' => array('value' => get_string('locale.lt_LT', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAERSURBVHjapJMxTsMwFIY/x05LCJCqEggJcQY4AQM7l2PjHHADRhbEBRgQEgIJQoua2HH8GJqqgclp/8Wy5Pf5e7KfEhG2iQJGwF63DokDfgxQtOXV+ya368ntkQFy8GDOB0gL+EeA3ABapEHJHMLnv8PSK+olmSLSAGgD0HqLSUqQMk4iJLTeAmAALu/OOCymzOwxgvRk1Z/9KsU45+N7AtwvAVVteZY3Zm4RJXAw2kVbWRtU9YIkHRMkRAF88Li618LN9QOn6YhQVVGAJMt4aRwXK0DtHGJSUCoKICLUzq0NrLWwk6HSNPIVwrKmA7hWhKfya5PP6BRQACfA/sDiOfCqAN0Nkh4IaAGnth3n3wEAueFrXoFF3HkAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'lv_LV' => array('value' => get_string('locale.lv_LV', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD1SURBVHjapJNBbsIwEEWfYytFSiukIrFhyYY9J6A37gXKCThAD9ANEo1EipWZEE8XEFoqVUrgbyxb/m/G4xlnZtwjB+TA43kdIgW+AjB+W622t0R/Wa+nASisbXleLnvm7MCMz80GoAiAT6o0+z2y211f7urj3NXxw2RCUgXwAaARQcoSLct+WWQZjchlO48x2lDFGA2YZwDyi9ZXnScDqOt6MKDzBIDXxYKp9xwPh17mUBRs2/YHICIwGuH+VPtfpXR5wgmgiuU5Wd6vGS0l5PSNBECPZrxX1S3NqA4YAzPgaaC5Aj4c4M+D5AcCWkDdveP8PQACvZWvMV3xjgAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'hu_HU' => array('value' => get_string('locale.hu_HU', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD3SURBVHjapJMxTgMxEEWf12ZRtKAIkGhSpqFFnICajmtxHmpOgLgDUhoQrJKAdz2766HJJqSzk+/C8sj/+2nkMarKMTJACZxt9hwJ8OOA6eL+4eOQ12cvz9cOqHToOb27TUM2BlUlvL4BVA6wKh1xtWL4+t6/PfbHmL2yvbpEpQOwDqAPgquXxHqZRlFY+hC257n3XnPlvVdgXgCEf2mpGj0FQNu22QGjxwHcPD1iLyb8SpNkrsoJQ93sCEITiDFiEleMkdCEHYF0QqlKaU+SCKIq0sk2QDRG1u+fh3xGMcAUmAHnmeY1sDCA3QySzQwYADHHjvPfAKSbmsRgfC7bAAAAAElFTkSuQmCC) no-repeat left center; padding-left: 20px;'),
		'mt_MT' => array('value' => get_string('locale.mt_MT', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAEgSURBVHjapJPRSgMxEEVPmrRQWrcqKrj1C8S/8cVf9MU/6YP4A1VbwSq4WsEkm2R8sFrX3aql8xIY7hzuXDJKRNikFNAB+ot3nfLAqwEGIjIrJlMAto+GFdXd6dlKwvDi/MAAveJ2QuEdCjAPj/T3975EnZPjH5YVguAurwB6BtCCkGIkhkAsfWUgjG8+Fv1WencHKUsAbQCyPEffz0gxMsjzijjNX+rBaU10FgAD4L0nyw8b90zFc70p4K1bApxzdLvdRkA5vq71WlmG1a0lwFq7MmlJqe4qlLz59D8ADQBVBtwi7L8BStVdiWC9r2awcr7dbnT1OWMAH0JgNBo1AibF06/fWQEDYAhsrXkLc2CqAL04JL0mIAJebXrO7wMAkcmAHXrf52IAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'nl_NL' => array('value' => get_string('locale.nl_NL', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD1SURBVHjapJMxTgMxEEWfY2ejaEERKWhSpkqBOAgdDTfjDjTcBXEBmjRIBLELxvbKMzSbsFSsky9ZliX/P88jj1FVTpEBKuCs30uUgE8HLLa3d6/HVF89Plw6oNacmV1fjUQ2KEp8egaoHWC169C2Je/e/97WwUMHsssLtOsArAPIMSIfDdI04yisJcdwOK+991oq770C6wlAjLG4gXvPBCCEUByw9ziAzc09drbk67sbZa7nU3Lc/RLEEBBRTN/w/5aIEocEKSUqUaqpHUUgoqSUDgFJRWjfXo75jMkAC2AFnBeaW2BrANsPki0MyEAyp47zzwB3zZnF+zoIqAAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'no_NO' => array('value' => get_string('locale.no_NO', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFrSURBVHjapJNBLwNRFIW/MTOt0qZhQbAgsSFCCDs7SwmRsLPyb8TaysbKjg17/2ASYS0q6IREdToy+t505lq0pkZL0ribd9+7J+eenHevISL8JwwgA+RbZy+hgXcLKJY3tl++V8bOT1nbO+HyeBd3c+dXhvGLsxELGCSKyC4upIqLMyMAZOfnuogW1NU1wKAFmBKGxL5PVHlLYHePVQDC0j0YRorCHB5CwhDAtAAaSmFWPeKql4DeanUAYq/Wqb2vj4ZSyXU6CAL5GQtbR/JXBEEgwLQFMLt+SCgZPF+lGuWXD7qaVyxksQ3dVuC6bkeH3NL+nwpc120ruF1ZRds2cfABwNTzPXHcHLDS6GSnBQM5HpomYgHUtUJMK+V2kv34AQCJhbpWbQKlNdKfg4ydgDK2+ZV0EkiM0joh0JEIN141Abw6Dn6lhOM4lL+9dxtnAygCE0Chx13wgScDMFuLZPZIEAHa+O86fw4ApIbl9EMu4AwAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'pl_PL' => array('value' => get_string('locale.pl_PL', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAADCSURBVHjapJM7DsIwEAVnnY9AQOhoOAgV9z8ANSUNFQSkxOvYSwMipZNs42rGz6tnMTOWjAA1sP2eU0aBdwnszew+63aRgwM2C16wcUCxQFA4gBjjZPLHOABVnSz4MSXA9XSmGSKpbbNg1zS0ZfEX9F3HDgcxZQksDPRhlMB3PVJVWMoTyBDwIYwSqMeKEkTyEiSjVz9KoIqt1lBXeQJL+NESNZpxeT7m9EAF2ANHYDcRfgE3+TaxntHICKgs/c6fAQCPgVSYGmG1OQAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'pt_PT' => array('value' => get_string('locale.pt_PT', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAHVSURBVHjapJNNa1NBFIafuXOTa3KbRkmbKkFERQSxILh0I4huxIV/yJ9hcaGgbly6ciGudCO4iCAqiB9Vq1FTb5MmzZ07ny4aTQpmEXpgGBg4D++Z874ihMB+SgBlYGF8z1MaGMZA/drDG7/+vjohkCFw6/brmZ3BeeLGIVbu32nGQOq859zyCQC8EEQhkKzOFh28w37+CpDGgDTOMtA5XTXEy0Ar2uH3wQ0WX3qEgxCLPYioXgdrAGQMUFhNVuygbZ+LbpNad4Tv9shOJSy+9cgMQrRnCGyhAYgB8kLxYzTi8vI7rr/ZJh9cxR+V6M0nDI91qT1NCCVgvLDgHdr5CUCpgp7/Tlb6QHs9QV66gq1VaK3dJT/yhWQj3W0eTyLSKurwypQCNULLKh1TIV/oc/rFI2w5JT6/RbIOjAIkE78EY1F5PgXIC6JqmedbTU6ubpO173Gh3cOdzUkel0A48FN7MIZCFbsfCqALhcCRmQo3f57hwfEmRTmisZYQdUpQEiAmJ/iAUmqiQGvDAQLVOMKImI+6ydKzT7iy/K8/g3UUxvwD6GAd/fcdAGwkiH3gVb8324nWIZcaAFoAdaAF1ObMwgD4JgA5DpKcE+AALfYb5z8DAGOr1n0Zxwo7AAAAAElFTkSuQmCC) no-repeat left center; padding-left: 20px;'),
		'ro_RO' => array('value' => get_string('locale.ro_RO', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFTSURBVHjapJM9TgMxEEafs5sgSEgEBUJwBAQNJ+AaVNyJI0BLRc8NEIgaQVIAEgKym0Ra/+x6KIhiO9BEWBpZn2w/fx7PKBHhP0MBHaA3n1cZFpjlwODk7PJ9efXm/CLRb6e9X4S966udHOg2jef4YDddzY4SuXa4HpkWzP0DQDcHMusaJjPDZ1GFE34IyOKQG3UDe3sLcQ4gywGMdYwnmvFEB4AUiQNf1EG0WtTGAJADVJXho6gop4bFr0ixsAvgyyYYAlylY0DF46ihnJroyqfEgXseBAP9PlWeBYDWGslzfFITPk1qE7S4Gu1sBDCGjA28jwASAwR80Kp2mJ8k0gIwusJ7Qc1frRbfFYUKIV7QNkqitZaOFzrtLKrRpcLstIMf8RgbnmBFPNOvYbL/9q5M9Gvp/yxnBQyAfWBzxV6YAi8KyOaNlK0IaACr/tvO3wMAJOGiBWzsFlIAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
		'sk_SK' => array('value' => get_string('locale.sk_SK', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAF1SURBVHjapJM/TxtBEEff3N6dY4EBCXEFiAa7iDBFPgAVfZpU6ZMqXyhSCrrQIDoaeigipfApBc3ZUmRHQlYiEWN0f3y7k8KWr7BTYE+zze7b/c28FVVlnRIgBDZn60uqAMY+sK2qw5VuF4k8YGONBBseYNYAGB/AWosxU87vjx/wj9tgDDaO2T0/X3rSWguAD3By9oUo2mE/qvG5zKm12yCCjb/z/tMV98kITDWtna1XDAd/KkCa5iQPY8pJRjjqot/uwPMIf3bpN0Z0h8/UjJsDntIJTsoKkKUZGmzyN1Mu7Gvuvg4oxXC218Q5cOqRatUq3xkkK+ceNG+PjpLDIMClKcPWG97qOwo13HiXRElnIb9Xr9OfTDjt9VrTF+Q56vsgQtSNuW5NN+4lMYgsAFSVLM+rCHlRoPU6BAEo7Pc6iCqFHy4HOEc2Hs8BhVXlx+PjkmGl/xVAnQMoBNgGDoDGCyV6An7JzMRwBSMtUMi63/nfAFaqlZR0varHAAAAAElFTkSuQmCC) no-repeat left center; padding-left: 20px;'),
		'sl_SI' => array('value' => get_string('locale.sl_SI', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFaSURBVHjapJO7SgNBFIa/SXajMcaNJAZBhBRCxNJWaxvxAWwEO99BiJ0PYGEh2IuFnY1YWFnZiSKChWggJF5WY7LZ2ewem9wgGnL5m2EG/m/mnPOPEhFGkQIiwGRjHUQa+DEAS0SKQ92uVNoAYp2H+YJNueJgxWPMpuKokOrFiBlAuLmrvtns7V/ghSuYfoyD3BoTqUQvQDgE4Ps+ABIEZDNJdrbXyWaSSBD862x6DIDljWPSMxal109yW4ssLUzzcA0rm6dIpLu3ialxiiW7Dag5NZ6ehY9vze7hDeeXj1zdf/HOGGF0F6DseJiq3gZUaw4YJgqh4Jmc3TlABIXwVxGeH+DVnTbgpHjEvGkSOE5f4wtVo7x4HqutElwXMQxQqi+AiFBz3fYLXK2RaBRMsz9AEOBq3QJoX4Rb2x4mjFoBFjAHxAc0l4G8aiQx0pnIPuUDWo36nX8HAEkLg3WpiPuDAAAAAElFTkSuQmCC) no-repeat left center; padding-left: 20px;'),
		'fi_FI' => array('value' => get_string('locale.fi_FI', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAEbSURBVHjapJNBSsNAFIa/IWMk1BJdWBdddlvQteDGC3gTvYMb996kF/AGuYF0KOKmRWpaYZJ0puPCNolJS1L6YJjH+/n/ebz3j3DOcUwIwAfONvchkQE/Egidc9Mycv/wmudvo8f9rwvRk0CnCtwM+2276EjAq1bV5AuAFuPxJIC1Fs8rdOaxbmRaawGQAMPbZ3qXF8SLhPJWhBBc373UyOdhwHQ2LwS0Tnkfz4gXur4jV5scYTfgRK4KgURrnAhYr9t4wmGMwa6SvDJQSrlynF495WdfKKUcMPjrIEmq+23sY8uRAGma/gN932sU2HIkkBljiKIoB5ffH3leru+yswBCoA90D/wLS+BTbJzo73Jkk5eATBz7nX8HAMMWjMlbPf5vAAAAAElFTkSuQmCC) no-repeat left center; padding-left: 20px;'),
		'sv_SE' => array('value' => get_string('locale.sv_SE', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAFeSURBVHjapJPLSsNQEIa/kxwaeiNKoRs3oq5b8BkEfRMF14WuXLjtC/RRFHwFFbfibSNioNjSS5KTNMdFDklaK7R0NnOYy39m/pkRWmu2EQGUgJrRm4gCJhJwT6/uvKLnptPL3me9zr8It9cnTQlU4yTh+KCRe+xW9mzt7y6WLEBreHgbAFQlYEexZuxHDMZhGpV8mHDN+/cEIRZ/btQdolgD2BJAKcXPVDGcKpM3zIJHM/WndMsSKKUyEg9nXvulXG6CHgF6ieMVUxI7+L5Hpfl0JAHCwKfsvBqAdWbnEgYSAAkQBD64AMmaE4wIgigHaHe72LUm0zBGAMP+uSkf3Is+SxxScSTziQdcYqUthOgELIRJtIwWmU0UtE7SnKwCFYU4WlOSlukxX8rMVpBEa1SUA6hkPmf09ZwF3D/mZBbtq9ZZkNK3B9Q3vIUx8CkA2xySvSHAHFBi23P+HQBzz4TV9Rc47AAAAABJRU5ErkJggg==) no-repeat left center; padding-left: 20px;'),
		'tr_TR' => array('value' => get_string('locale.tr_TR', 'artefact.europass'), 'style' => 'background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAHFSURBVHjapJOxbhNREEXP2/d2bWKvo0UKBS5SQpMPyAekSpnUQcoHICjgHyJTAAV0blNE6VJEgvyEI6jSYMlO5Ci2Y+zs7tvnHYpdsBAgYeU2U82de2fuKBHhPlBAANTLugwsMDXAan9nZyDWooLlOB4fHz8yQI35nMrGBsoYxDkkz1HGoDzvL5oViJB2OgA1A2jJMvLJhPlwiL++jt9s4vp9sm63aFDqNw4dRUiWAWgD4NIUPRiwsr1NfXeX+PSUfDZDXV/jrq6Kwb6/YPA8XJoCYACyJOHB2hqNvT1GBwdMDw9R9RDlG1a2trg7OwNjiqmlmixJFgRxHNMIAhBhenSEu7lB3d4SvXhJuL+PV6sz/vgBSRLQGq/RINZ6QZDEMdnFBShFdXOTSbuNF4YM37RAhNG7twsLeY44R2JtsQ/g4bMwfF7rfkNQRK9eo6MI3QghTZmdnKC0BucKAhE8z2NoLe3R6H2hIE1BG8atFnefPhM8fULW6+EuL1GVyh+XEJGi56eF1FqkWkWFIfbrF+x5B3z/n8GSPCctLRjAzkU4H4+Lab+Cav8rzgpYBZpAuOQvfAd6qlxkUNZlMAesuu87/xgAWtDAdYqEIUUAAAAASUVORK5CYII=) no-repeat left center; padding-left: 20px;'),
	);
}

// Set locale according to Mahara's default (selected) language
function set_default_locale($l) {
	switch ($l) {
		case 'bg.utf8': $locale = 'bg_BG'; break;
		case 'cs.utf8': $locale = 'cs_CZ'; break;
			case 'fo.utf8': // if Faroese, then set to Danish
		case 'da.utf8': $locale = 'da_DK'; break;
		case 'de.utf8': $locale = 'de_DE'; break;
		case 'el.utf8': $locale = 'el_GR'; break;
			case 'an.utf8': // if Aragonese, then set to Spanish
			case 'ca.utf8': // if Catalan/Valencian, then set to Spanish
			case 'eu.utf8': // if Basque, then set to Spanish
			case 'gl.utf8': // if Galician, then set to Spanish
			case 'oc.utf8': // if Occitan, then set to Spanish
		case 'es.utf8': $locale = 'es_ES'; break;
		case 'et.utf8': $locale = 'et_EE'; break;
		case 'fi.utf8': $locale = 'fi_FI'; break;
			case 'br.utf8': // if Breton, then set to French
			case 'co.utf8': // if Corsican, then set to French
			case 'wa.utf8': // if Wallon, then set to French
		case 'fr.utf8': $locale = 'fr_FR'; break;
		case 'hr.utf8': $locale = 'hr_HR'; break;
		case 'hu.utf8': $locale = 'hu_HU'; break;
		case 'is.utf8': $locale = 'is_IS'; break;
			case 'sc.utf8': // if Sardinian, then set to Italian
		case 'it.utf8': $locale = 'it_IT'; break;
		case 'lt.utf8': $locale = 'lt_LT'; break;
		case 'lv.utf8': $locale = 'lv_LV'; break;
		case 'mt.utf8': $locale = 'mt_MT'; break;
			case 'fy.utf8': // if West Frisian, then set to Dutch
			case 'li.utf8': // if Limburgish, then set to Dutch
		case 'nl.utf8': $locale = 'nl_NL'; break;
			case 'nb.utf8': // if Norwegian (Bokmål), then set to Norwegian
			case 'nn.utf8': // if Norwegian (Nynorsk), then set to Norwegian
		case 'no.utf8': $locale = 'no_NO'; break;
		case 'pl.utf8': $locale = 'pl_PL'; break;
		case 'pt.utf8': $locale = 'pt_PT'; break;
		case 'ro.utf8': $locale = 'ro_RO'; break;
		case 'sk.utf8': $locale = 'sk_SK'; break;
		case 'sl.utf8': $locale = 'sl_SI'; break;
		case 'sv.utf8': $locale = 'sv_SE'; break;
		case 'tr.utf8': $locale = 'tr_TR'; break;
			case 'kw.utf8': // if Cornish, then set to English
			case 'cy.utf8': // if Welsh, then set to English
		default: $locale = 'en_GB';
	}
	return $locale;
}

// Get Mahara lang folder name according to selected locale
function get_lang_from_locale($l) {
	switch ($l) {
		case 'bg_BG': $locale = 'bg.utf8'; break;
		case 'cs_CZ': $locale = 'cs.utf8'; break;
		case 'da_DK': $locale = 'da.utf8'; break;
		case 'de_DE': $locale = 'de.utf8'; break;
		case 'el_GR': $locale = 'el.utf8'; break;
		case 'es_ES': $locale = 'es.utf8'; break;
		case 'et_EE': $locale = 'et.utf8'; break;
		case 'fi_FI': $locale = 'fi.utf8'; break;
		case 'fr_FR': $locale = 'fr.utf8'; break;
		case 'hr_HR': $locale = 'hr.utf8'; break;
		case 'hu_HU': $locale = 'hu.utf8'; break;
		case 'is_IS': $locale = 'is.utf8'; break;
		case 'it_IT': $locale = 'it.utf8'; break;
		case 'lt_LT': $locale = 'lt.utf8'; break;
		case 'lv_LV': $locale = 'lv.utf8'; break;
		case 'mt_MT': $locale = 'mt.utf8'; break;
		case 'nl_NL': $locale = 'nl.utf8'; break;
		case 'no_NO': $locale = 'no.utf8'; break;
		case 'pl_PL': $locale = 'pl.utf8'; break;
		case 'pt_PT': $locale = 'pt.utf8'; break;
		case 'ro_RO': $locale = 'ro.utf8'; break;
		case 'sk_SK': $locale = 'sk.utf8'; break;
		case 'sl_SI': $locale = 'sl.utf8'; break;
		case 'sv_SE': $locale = 'sv.utf8'; break;
		case 'tr_TR': $locale = 'tr.utf8'; break;
		default: $locale = 'en.utf8';
	}
	return $locale;
}

/*
 Function that returns the description of occupation in selected locale
 or in English, if the description doesn't exist or isn't translated.
 
 The description of occupation is based on occupation code and can be gender specific.
*/
function get_occupation($code, $locale='en_GB', $gender=null) {
	$docroot = get_config('docroot') . 'artefact/europass/';
	include_once($docroot . 'occupation/occupations_en_GB.php');
	switch ($gender) {
		case 'female':
			$occupation_list = isco88com_occupations_list_F_en_GB();
			if ($locale != 'en_GB') {
				if (file_exists($docroot . 'occupation/occupations_' . $locale . '.php')) {
					include_once($docroot . 'occupation/occupations_' . $locale . '.php');
					$locale_occupation_list = call_user_func('isco88com_occupations_list_F_' . $locale);
					$occupation_list = array_merge($occupation_list, $locale_occupation_list);
				}
			}
			break;
		case 'male':
			$occupation_list = isco88com_occupations_list_M_en_GB();
			if ($locale != 'en_GB') {
				if (file_exists($docroot . 'occupation/occupations_' . $locale . '.php')) {
					include_once($docroot . 'occupation/occupations_' . $locale . '.php');
					$locale_occupation_list = call_user_func('isco88com_occupations_list_M_' . $locale);
					$occupation_list = array_merge($occupation_list, $locale_occupation_list);
				}
			}
			break;
		default:
			$occupation_list = isco88com_occupations_list_NA_en_GB();
			if ($locale != 'en_GB') {
				if (file_exists($docroot . 'occupation/occupations_' . $locale . '.php')) {
					include_once($docroot . 'occupation/occupations_' . $locale . '.php');
					$locale_occupation_list = call_user_func('isco88com_occupations_list_NA_' . $locale);
					$occupation_list = array_merge($occupation_list, $locale_occupation_list);
				}
			}
	}
	
	$return['code']  = ltrim($code, 'i');  // Trim character i from beginning of code...
	$return['label'] = null;
	if (array_key_exists($code, $occupation_list)) {
		$return['label'] = $occupation_list[$code];
	}
	return $return;
}

?>