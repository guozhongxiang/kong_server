<?php    
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    
    //echo "<h1>PHP QR Code</h1><hr/>";
    


    include "qrlib.php";    
    
    $level = isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')) ? $_REQUEST['level'] : 'L';

    $point_size = isset($_REQUEST['size']) ? min(max(intval($_REQUEST['size']), 1), 10) : 6;
    $mr = isset($_REQUEST['mr']) ? intval($_REQUEST['mr']) : 2;
    QRcode::png('Hi', false, $level, $point_size, $mr);

    