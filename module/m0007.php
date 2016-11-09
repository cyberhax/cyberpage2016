<?php
echo "
<div class=\"modal-header\" >
<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Forensic</h4>
</div>
<div id=\"modalbody\" class=\"modal-body\">
<Strong>Description:</Strong>
    <p>File Carving and evidence acquisition.
“File carving,” or sometimes simply “carving,” is the process of extracting a collection of data from a larger data set. 
Data carving techniques frequently occur during a digital investigation when the unallocated file system space is 
analyzed to extract files. The files are “carved” from the unallocated space using file type-specific header and 
footer values. </p>
    <br/>
    <Strong>Duration:</Strong>
    <p>3 hours</p>
    <br/>
    <Strong>Pre-requisite:</Strong>
    <p>
    <ul>
    <li>Scripting language eg.Python,ruby,perl</li>
	<li>Basic terminal and command line (Basic Module)</li>
	</ul>
	</p>
    <br/>
    <Strong>Syllabus included:</Strong>
    <p>
    <ul>
        <li>File header and footer</li>
		<li>Magic number</li>
		<li>File extraction</li>
		<li>Evidence analysis</li>

    </ul>
    </p>
    <br/>
    <Strong>What this module aim for:</Strong>
    <p>File system structures are not used during the process. File carving is a powerful technique for recovering files 
    and fragments of files when directory entries are corrupt or missing. The block of data is searched block by block 
    for residual data matching the file type-specific header and footer values. 
As long as data is not overwritten or wiped, deleted data on all storage devices can be restored using carving techniques, 
including multifunctional devices and even mobile phones.</p>
    </div>
";
?>