      ******************************************************************
      * Author:
      * Date:
      * Purpose:
      * Tectonics: cobc
      ******************************************************************
       IDENTIFICATION DIVISION.
       PROGRAM-ID. Sequence-Program.
       DATA DIVISION.
       WORKING-STORAGE SECTION.
       01 Num1 PIC 9 VALUE ZEROS.
       01 Num2 PIC 9 VALUE ZEROS.
       01 Result PIC 99 VALUE ZEROS.
       PROCEDURE DIVISION.
       Calc-Result.
               ACCEPT Num1.
               ACCEPT Num2.
               MULTIPLY Num1 BY Num2 GIVING Result.
               ACCEPT Num2.
               DISPLAY "Result is = ", Result.
            STOP RUN.
       END PROGRAM Sequence-Program.
