# mahara-artefact-europass

This is an Europass artefact plugin for Mahara e-portfolio system. It allows integration of Europass services into Mahara.

## Description

This plugin provides users with integration of Europass Curriculum Vitae and/or Language Passport. Users can review their
data already entered into Mahara and update them. Besides that the plugin also provides the ability to add/update the data
about foreign language knowledge which is not built into Mahara by default. Users can export their data from Mahara to
generate Europass compaliant documents in various formats.

## Installation

1. Create a directory under your Mahara installation: `htdocs/artefact/europass`
2. Copy the contents of this repository into that directory.
3. Run the normal Mahara upgrade process.
4. Log in to your Mahara site as an admin.
5. Go to "Administration -> Extensions -> Plugin administration"
6. Under the "Plugin type: blocktype" list, find the list of blocktypes that start with "europass/".
7. Hide each cloud blocktype that you don't wish to use by clicking "Hide" next to it.

## Usage

1. Log in as a normal Mahara user.
2. Go to "Create -> Europass"
3. Review data already entered into Mahara and/or add language knowledge data.

## License and copyright

Copyright (C) 2009-2019 Gregor Anzelj, and other contributors.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, version 3 or later of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

Additional permission under GNU GPL version 3 section 7:

If you modify this program, or any covered work, by linking or
combining it with the OpenSSL project's OpenSSL library (or a
modified version of that library), containing parts covered by the
terms of the OpenSSL or SSLeay licenses, the Mahara copyright holders
grant you additional permission to convey the resulting work.
Corresponding Source for a non-source form of such a combination
shall include the source code for the parts of OpenSSL used as well
as that of the covered work.