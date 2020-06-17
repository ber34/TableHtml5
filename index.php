<?php

$tableHtml5 = new TableHtml5();

    
          $tHeaderRows = ["Id", "ISBN", "Title", "Author"];

          $tBodyRows   = [
                          ['1', '978-83-938738-0-7', 'Behind the Black Angel', 'Adam Berger'],
                          ['2', '9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'],
                          ['3', '960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'],
                          ['4', '978-83-800-8211-3', 'Harry Potter and the Philosopher"s Stone', 'Rowling Joanne K'],
                         ];
					  
                      $tableHtml5->startTable();
                      $tableHtml5->setTheader($tHeaderRows);
                      $tableHtml5->setRows($tBodyRows);
                      $tableHtml5->tBody();
		      $tableHtml5->endTable(); 
                 echo $tableHtml5->getRenderView();
