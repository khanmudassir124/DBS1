Planning:-
-- SDM System
    --> Parents
        -- Annoucements
        -- Attendance
        -- Report Card / Results
        -- Feedback
            -> Teacher
            -> Complaint / Request
            -> Principal
            -> Administration
        -- Assignments / Homework / Project 
    --> Teachers
        -- Attendance
            -> Mark Attendace
            -> Edit Attendace
        -- Reports
            -> Marks UPLOAD/EDIT
            -> Allocate Assignments
            -> Subject Syllabus
            -> Teachers Attendance
            -> Leave application 
            -> TimeTable
            -> Results
            -> Complaints
                - Parents
                - Principal
                - Feedback
                - Managements
            -> Alerts
    --> Students
        -- Timetable
        -- Results
        -- Annoucements
        -- Projects / Assignments
        -- Attendace
        -- Feedback
            -> Teacher
            -> Complaint / Request
            -> Principal
            -> Administration
    --> Staff
        -- Attendance
        -- Feedback
            -> Teacher
            -> Complaint / Request
            -> Principal
            -> Administration
    --> Management/Principal
        -- Principal
            -> Leaves
                - Students
                - Teachers
                - Staff
            -> Feedbacks / Complaints    
            -> Annoucement
            -> Timetable
            -> Results
            -> Admission
    --> Admin
        -- Add/Delete/Update Users
            -> Parents
            -> Teachers
            -> Managements
            -> Staff
            -> Students
        -- Assign Roles
        -- Announcements
        -- Results
        -- Admission

    --> Visitors
        -- Register/Enquire
        -- Admissions
    --> Library
-- Dashboard

-- Database
    -- Student
        - S_ID (Primary Key)
        - A_ID (Foreign Key)
        - S_Email
        - S_Password
        - S_Photo
        - S_Name
        - S_Roll_No
        - S_Mob_No
        - P_ID (Foreign Key)
        - S_DOB
        - S_Class
        - S_Division
        - S_Adhaar
        - S_Address
        - S_E_Year
        - S_Religion
        - S_Gender
        - S_Status
        - S_Update_Time
        - S_Reg_Date
        - S_Signature
        - M_ID (Foreign Key)
        - Class_ID (Foreign Key)

    -- Parents
        - P_ID (Primary Key)
        - P_EMail
        - P_Password
        - P_Name
        - P_Photo
        - P_Mobile_No
        - P_Address
        - P_Father_Name
        - P_Mother_Name
        - P_Update_Time
        - P_Signature

    -- Staff
        - Staff_ID ( Primary Key)
        - A_ID (Foreign Key)
        - S_Role
        - S_Photo
        - S_Email
        - S_Password
        - S_Name
        - S_Address
        - S_Mobile_No
        - S_Status
        - S_Adhaar_No
        - S_Update_Time
        - S_Signature

    -- Teachers
        - T_ID
        - Staff_ID (Foreign Key)
        - Sub_ID (Foreign Key)
        - A_ID (Foreign Key)
        - Announement_ID (Foreign Key)
        - Mark_ID (Foreign Key)
        - Class_ID (Foreign Key)
    
    --Principal
        - Pr_ID
        - Staff_ID (Foreign Key)
        - Principal_Status


    -- Subject
        - Sub_ID (Primary Key)
        - Sub_Name
        - Sub_Total_Ch
        - Sub_Ch_Cover
        - Class_ID (Foreign Key)
        - M_ID (Foreign Key)

    -- Class
        - Class_ID (Primary Key)
        - Class_Name

    -- Attendance
        - A_ID (Primary Key)
        - At_Date
        - At_Present
        - At_Holiday

    -- Marks
        - M_ID (Primary Key)
        - Class_ID (Foreign Key)
        - Sub_ID (Foreign Key)
        - M_Total
        - M_Obtained
        - M_Result
        
    -- Announcement
        - Announcement_ID (Primary Key)
        - Ann_Link
        - Ann_Time_Stamp
        - Ann_Status





Requirement and Analysis:-

1. add section using dropdown.


Designing:-





Development:-






Testing:-


abc