<?php
    include ('../../database/config.php');
    
    $classid = $_POST['classid'];
    
    $staffid = $_POST['staffid'];
    
    $rolefirst = $_POST['rolefirst'];

    $sqlstaffcheck = "SELECT * FROM `staff_roles` INNER JOIN roles ON staff_roles.role_id=roles.id";
    $resultstaffcheck = mysqli_query($link, $sqlstaffcheck);
    $rowstaffcheck = mysqli_fetch_assoc($resultstaffcheck);
    $row_cntstaffcheck = mysqli_num_rows($resultstaffcheck);
    
    if($row_cntstaffcheck > 0)
    {
        echo '<option value="0">Select Section</option>';
        if($rowstaffcheck['name'] == 'Teacher')
        {
            $sqlclasses = "SELECT DISTINCT(class_sections.section_id) AS actual_section_id, section FROM `subject_timetable` INNER JOIN class_sections ON subject_timetable.section_id=class_sections.section_id INNER JOIN sections ON class_sections.section_id=sections.id WHERE subject_timetable.staff_id = '$staffid' AND subject_timetable.class_id = '$classid'";
            $resultclasses = mysqli_query($link, $sqlclasses);
            $rowclasses = mysqli_fetch_assoc($resultclasses);
            $row_cntclasses = mysqli_num_rows($resultclasses);

            if($row_cntclasses > 0)
            {
                do{
                    
                    echo'<option value="'.$rowclasses['section_id'].'">'.$rowclasses['section'].'</option>';
                    
                }while($rowclasses = mysqli_fetch_assoc($resultclasses));
            }
            else
            {
                echo'<option value="0">No Records Found</option>';
            }
        }
        else
        {
            $sqlsection = "SELECT class_sections.id AS section_id,class_sections.section_id AS actual_section_id,section FROM `class_sections` INNER JOIN sections ON class_sections.section_id=sections.id WHERE class_id='$classid' ORDER BY section ASC";
            $resultsection = mysqli_query($link, $sqlsection);
            $rowsection = mysqli_fetch_assoc($resultsection);
            $row_cntsection = mysqli_num_rows($resultsection);
        
            if($row_cntsection > 0)
            {
                
                do{
                    
                    echo'<option value="'.$rowsection['section_id'].'">'.$rowsection['section'].'</option>';
                    
                }while($rowsection = mysqli_fetch_assoc($resultsection));
            }
            else
            {
                echo'<option value="0">No Records Found</option>';
            }
        }
        
    }
    else
    {
        
        echo'<option value="0">No Records Found</option>';
            
    }
?>