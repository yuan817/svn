<?php
    /**
     * @package Narro
     * @subpackage Templates
     *
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008-2011 Alexandru Szasz <alexxed@gmail.com>
     * http://code.google.com/p/narro/
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
     * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
     * later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
     * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
     * more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the
     * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
     */
?>
<?php echo t('Click on any project name to start translating.'); ?>
<span style="text-align:right;display:block;white-space:nowrap;">
<?php
$_CONTROL->txtSearch->Render();
$_CONTROL->btnSearch->Render();
$_CONTROL->btnAdd->Render();
?>
</span>
<?php $_CONTROL->dtgProjectList->Render() ?>
