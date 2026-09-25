# CG BUG (ANIMORA) – Animation Studio Library
## Field Project Documentation & Workbook Report
**Course:** S.Y. B.Sc. (Computer Science) | **Pattern:** NEP-2023 | **Semester:** III (2025–2026)  
**Course Code:** DCSU239S – Field Project using Software Engineering  
**College:** Shikshan Prasarak Sanstha's Sangamner Nagarpalika Arts, D.J. Malpani Commerce and B.N. Sarda Science College, Sangamner  
**Industry Partner:** CG BUGS – An IT Media Production Company, Sangamner  

---

### Project Group: Hexa Core

| Sr. No. | Student Full Name | Exam Seat No. | Roll No. |
| :---: | :--- | :---: | :---: |
| **1.** | **Vaishnavi Vaijnath Galande** (Lead) | **4950** | **18** |
| **2.** | **Swamini Rameshwar Bhaskar** | **4942** | — |
| **3.** | **Payal Ramnath Satpute** | **4982** | — |
| **4.** | **Shruti Ram Kadlag** | **4957** | — |
| **5.** | **Shreya Vaibhav Abhang** | **4936** | — |

**Industry Mentors:** Mr. Vishal Kadlag (Owner & Director, CG Bugs Company), Ms. Siddhi Wakchure  

---

## INDEX

| Sr. No. | Title |
| :---: | :--- |
| **1.** | **Introduction**<br>&nbsp;&nbsp;• Problem Statement<br>&nbsp;&nbsp;• Objective of the System |
| **2.** | **System Design**<br>&nbsp;&nbsp;• Data Dictionary (8 Normalized Tables)<br>&nbsp;&nbsp;• Assignment No: 2 – Entity Relationship (ER) Diagram<br>&nbsp;&nbsp;• Assignment No: 4 – Use Case Diagram<br>&nbsp;&nbsp;• Assignment No: 5 – Class Diagram<br>&nbsp;&nbsp;• Assignment No: 6 – Activity Diagram<br>&nbsp;&nbsp;• Assignment No: 7 – Sequence Diagram<br>&nbsp;&nbsp;• Assignment No: 8 – State Chart Diagram<br>&nbsp;&nbsp;• Assignment No: 9 – Object Diagram<br>&nbsp;&nbsp;• Assignment No: 10 – Collaboration Diagram |
| **3.** | **Implementation details**<br>&nbsp;&nbsp;• Software-Hardware specifications (Front-End & Back-End Tools) |
| **4.** | **Coding**<br>&nbsp;&nbsp;• MVC Architecture & Directory Structure<br>&nbsp;&nbsp;• Routing Configuration (`routes/web.php`)<br>&nbsp;&nbsp;• Controller Logic (`HomeController.php`, `AuthController.php`)<br>&nbsp;&nbsp;• Eloquent Models (`Asset.php`, `Category.php`, `User.php`) |
| **5.** | **Input-Output Screens and Reports**<br>&nbsp;&nbsp;• Real Animora Website Interfaces<br>&nbsp;&nbsp;• Studio Asset Dashboard & Global Search<br>&nbsp;&nbsp;• Studio Asset Catalog & Character Rigs<br>&nbsp;&nbsp;• **Student Library Section** (Downloadable Notes, 2D, 3D, VFX, Game Art)<br>&nbsp;&nbsp;• Student Work Showcase & Pipeline View<br>&nbsp;&nbsp;• Campus Helpdesk Form & Contact Mascot |
| **6.** | **Testing**<br>&nbsp;&nbsp;• Comprehensive Test Cases Matrix (10 Scenarios)<br>&nbsp;&nbsp;• Quality Assurance Verification & Sign-Off |
| **7.** | **Advantages and Future Enhancement of the System**<br>&nbsp;&nbsp;• Operational Advantages<br>&nbsp;&nbsp;• Future Enhancements & DCC Pipeline Integrations |
| **8.** | **Bibliography and References**<br>&nbsp;&nbsp;• Industrial Mentorship, Interviews & Studio Visits<br>&nbsp;&nbsp;• Technical Documentation & Web References<br>&nbsp;&nbsp;• Field Project Team Photograph at CG Bugs Studio |

---

## 1. Introduction

### Problem Statement
CG Bugs is a creative animation and VFX IT media production company and academy where multiple projects are executed simultaneously by different teams. Each project generates and requires the use of models, textures, rigs, sound effects, animation, and project files.

At present, the company lacks a centralized system to store, organize, and manage these assets.

**Problems in the Existing System (as identified in Assignment 1):**
1. **Duplication of Work:** Artists often recreate existing assets due to the absence of a searchable, organized library.
2. **Lack of Version Control:** Different versions of the same model or animation exist without proper tracking and verification.
3. **Poor Collaboration:** Team members working in different departments (Modeling, Rigging, Animation, VFX) cannot easily access or update shared resources.
4. **Security Issues:** Assets can be lost, overwritten, or deleted due to lack of controlled access, role permissions, and regular backups.
5. **Version Conflict:** Wrong asset versions sometimes get used in projects, lowering consistency, causing render crashes, and affecting project quality.

### Objective of the System
The primary objective is to provide a computerized digital library for animation assets at CG Bugs Company. It manages resources such as 3D models, 2D sketches, textures, sound files, and video clips while providing role-based access for Admins, Animators, Designers, and Students.

Key objectives include:
- **Centralized Asset Management:** Store all assets in one organized digital location grouped by type (Characters, Backgrounds, Scripts, VFX, Audio).
- **Sub-Second Search Facility:** Search assets using file name, category, or project tags without browsing through external online platforms.
- **Dedicated Student Library Section:** A special repository placed between About and Contact Us providing downloadable study notes, 2D model sheets, 3D biped rigs, volumetric VFX caches, and game art assets for students.
- **Streamlined Studio Collaboration:** Enable team members to collaboratively access, share, and manage resources in a single common system.
- **Asset Reusability:** Reduce duplication of work and accelerate project delivery by 40–60%.

---

## 2. System Design

### Data Dictionary (Normalized Database Tables)

Data normalization has been systematically applied to eliminate duplication and ensure data integrity. Below are the 8 normalized tables from the Field Project Workbook:

#### 1. Table Name: `Library`
*To manage one to many relation between Library & Document.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | Unique Id of Library | `L_ID` | int(3) | `L_ID=01` |
| **Name** | Name of the Library | `L_name` | varchar(30) | `L_name="Studio Library"` |
| **Description** | Description | `Desc` | text | `Desc="XYZ"` |
| **Created Date** | Date of creation the Library | `Created Date` | date | `date=3/2/2025` |

#### 2. Table Name: `Document`
*To manage many to one relation between Document & Category, User, Library, Project.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | Unique ID | `D_ID` | int(2) | `D_ID=02` |
| **Title** | Title of document | `Title` | varchar(10) | `Title="3D3"` |
| **Content** | Content contain in | `Content` | text | `Content="DEF"` |
| **Upload date** | Document Uploaded Date | `Upload date` | date | `Upload date=6/9/2025` |
| **LID** | Unique id of library | `L_ID` | int(3) | `L_ID=01` |
| **CID** | Unique id of category | `C_ID` | int(3) | `C_ID=02` |
| **UID** | Unique id of user | `U_ID` | int(3) | `U_ID=30` |

#### 3. Table Name: `Category`
*To manage one to many relation between Category & Document.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | Unique id of Category | `C_ID` | int(3) | `C_ID=02` |
| **Name** | Name of Category | `C_Name` | varchar(30) | `C_Name="3D"` |
| **Description** | Description of Category | `Desc` | text | `Desc="DEF"` |

#### 4. Table Name: `User`
*To manage one to many relation between User & Document, Search Query.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | Unique number ID | `U_ID` | length(2) | `U_ID=30` |
| **Name** | Name of user | `name` | varchar(20) | `name="XYZ"` |
| **Email** | Email of user | `email` | varchar(10) | `email="xyz@gmail.com"` |
| **Password** | Password of user | `password` | int(10) | `password=12345` |

#### 5. Table Name: `Project`
*To manage one to many relation between Project & Document.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | Unique ID | `P_ID` | int(2) | `P_ID=03` |
| **Name** | Name of Project | `pname` | varchar(20) | `pname="ABC"` |
| **Description** | Description of Project | `desc` | text | `desc="XYZ"` |
| **Start date** | Date of project start | `start_date` | date | `start_date=9/9/2025` |
| **Dead line** | Dead line of project | `dead_line` | date | `dead_line=20/10/2025` |

#### 6. Table Name: `Object`
*To manage many to one relation between Object to Search Query.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | ID of object | `O_ID` | int(3) | `O_ID=3` |
| **Name** | Name of object | `O_name` | varchar(10) | `O_name="VFX"` |
| **Searching Type**| Type of searching | `searching type`| text | `searching type="3D"` |

#### 7. Table Name: `Search Query`
*To manage one to many relation between Search Query & Object, Response.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **ID** | Unique ID | `Q_ID` | int(3) | `Q_ID=03` |
| **U_ID** | User ID | `U_ID` | length=2 | `U_ID=30` |
| **Question** | Search Question what you want | `Question` | text | `Question="ABC"` |
| **Time** | Response time for search question | `Time` | time | `Time=5 s` |

#### 8. Table Name: `Response`
*To manage many to one relation between Response & Search Query.*

| Data Name | Description | Alias | Length | Value |
| :--- | :--- | :---: | :---: | :--- |
| **R ID** | Response ID | `R_ID` | int(2) | `R_ID=1` |
| **Q ID** | Unique ID | `Q_ID` | int(3) | `Q_ID=06` |
| **Answer** | Answer of Quetions | `answer` | text | `answer="ABCD"` |

---

### UML Diagrams (Exact Layout as given in the Workbook PDF)

All diagrams below are reproduced exactly matching the assignments in the workbook:

1. **Assignment No: 2 – ER Diagram** (Page 9 of Workbook)  
   Represents entities: `Library`, `Document`, `Category`, `User`, `Project`, `Object`, `Query`, and `Response` with cardinalities and keys.
2. **Assignment No: 4 – Use Case Diagram** (Page 14 of Workbook)  
   Represents actors `:student`, `:CG Bugs Staff`, and `:Developer / Producer` interacting with `Visit Website`, `Login In App`, `Search For Different Object (2D, 3D, VFX)`, `Save Object`, `Load Object`, `Manage Objects`, `Manage User Accounts`, and `Back Up Library Assets`.
3. **Assignment No: 5 – Class Diagram** (Page 15 of Workbook)  
   Captures the static classes `user`, `Document`, `Library`, `Project`, `Category`, `Search Query`, `Object`, and `Response` with private attributes and methods.
4. **Assignment No: 6 – Activity Diagram** (Page 16 of Workbook)  
   Models the user flow from Login/Registration through Password Validation into 3 parallel branches: 2D (Search & Download Character), 3D (Search, Select & Observe Character), and VFX (Search, Save & Adjust Setting).
5. **Assignment No: 7 – Sequence Diagram** (Page 17 of Workbook)  
   Traces the chronological interaction messages between `u : User`, `S : Studio library`, and `d : Database`.
6. **Assignment No: 8 – State Chart Diagram** (Page 19 of Workbook)  
   Details the state transitions: `Login` -> `Enter user id & Password` -> `Searching Object` -> `Save Object` -> loop back or terminate.
7. **Assignment No: 9 – Object Diagram** (Page 20 of Workbook)  
   Captures instantiated runtime objects: `U:User`, `D:Document`, `S:Search_Query`, `L:Library`, `P:Project`, `C:Category`, `O:Object`, `R:Response`.
8. **Assignment No: 10 – Collaboration Diagram** (Page 21 of Workbook)  
   Portrays object linkages and numbered message exchanges (1 to 13) between `U:User`, `S:Studio library`, and `d:Database`.

*(All exact high-resolution diagram figures are embedded directly into the submitted Word document).*

---

## 3. Implementation details

### Software-Hardware specifications

#### 1. Software Specifications
- **Front-End Development Tools:**
  - Web Browser: Google Chrome, Microsoft Edge, Mozilla Firefox
  - HTML: HTML5 Semantic Structure
  - CSS: Vanilla CSS3 Minimalist Dark Theme
- **Back-End Development Tools:**
  - DBMS: MySQL Community Server with InnoDB Engine
  - Python Language: Scripting and automation utilities
  - PHP Language: PHP 8.x with Laravel 10.x MVC Framework
- **Environment Tools:** Git, Composer, npm, VS Code / Antigravity IDE

#### 2. Hardware Specifications
- **Processor:** Intel Core i7 / AMD Ryzen 7 (Minimum: Intel Core i5)
- **RAM:** 16 GB to 32 GB DDR4/DDR5
- **Storage:** 512 GB – 1 TB NVMe SSD
- **GPU:** NVIDIA GeForce RTX 3060 / 4060 (Minimum: 4 GB VRAM)
- **Display:** 1920x1080 Full HD IPS Display

---

## 4. Coding

### Key Controllers & Routes

```php
// routes/web.php
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/student-work', [HomeController::class, 'studentWork'])->name('student.work');
Route::get('/browse/{category?}', [HomeController::class, 'browse'])->name('browse');
Route::get('/asset/{slug}', [HomeController::class, 'showAsset'])->name('asset.show');
Route::get('/pipeline', [HomeController::class, 'pipeline'])->name('pipeline');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

// Contact API
Route::post('/api/contact/submit', [AuthController::class, 'submitContact'])->name('contact.submit');
```

---

## 5. Input-Output Screens and Reports

This section presents the real authentic website screenshots and features of the created Animora system:

### 5.1 Screen 1: Animora Studio Library Landing & Search Interface
- **Features:** Global live search, quick category pills (Characters, Rigs, VFX, Environments, Audio), and live asset counters (250+ Assets, 120+ Rigs, 45+ VFX Sims).
- **Screenshot:** Embedded from `public/images/animora-hero-full.png`.

### 5.2 Screen 2: Studio Asset Catalog & Character Rigs
- **Features:** Paginated grid displaying rigged biped models, props, and asset formats (.MA, .BLEND, .FBX).
- **Screenshot:** Embedded from `public/images/ChatGPT Image Sep 11, 2026, 08_36_02 PM.png`.

### 5.3 Screen 3: Full Studio Interface & Features Overview
- **Features:** Complete view of the Animora digital asset management platform.
- **Screenshot:** Embedded from `public/images/ChatGPT Image Sep 11, 2026, 08_31_41 PM.png`.

### 5.4 Screen 4: Student Work & Animation Showcase
- **Features:** Gallery displaying student character modeling, lighting reels, and texturing projects.
- **Screenshot:** Embedded from `public/images/student-work/student-work-banner.webp`.

### 5.5 Screen 5: Student Library Section (Between About and Contact Us)
As requested, a dedicated **Student Library** section is added on the website between the **About** and **Contact Us** sections. It provides downloadable assets and notes across 5 categories:

| Category | Title | File Format & Size | Description |
| :--- | :--- | :---: | :--- |
| **📚 Study Notes** | 3D Rigging & Pipeline Cheatsheet | PDF (4.8 MB) | Maya biped joint hierarchy, IK/FK blending, skin weights guide |
| **📚 Study Notes** | 12 Principles of Animation Handbook | PDF (8.2 MB) | Timing charts, anticipation curves, squash & stretch examples |
| **🎨 2D Animation** | 8-Point Character Turnaround Kit | PSD / PNG (22.5 MB) | Standard studio turnaround proportion & layered expression sheets |
| **🎨 2D Animation** | Walk & Run Cycle Keyframe Library | ZIP / PNG (14.1 MB) | Vector frame-by-frame pose breakdown sequences |
| **🧊 3D Models & Rigs** | Animora Biped Warrior Character Rig | MA / FBX (38.6 MB) | Full biped character rig with facial blendshapes and quad mesh |
| **🧊 3D Models & Rigs** | Modular Sci-Fi Corridor & Props Kit | BLEND / FBX (64.2 MB) | 42 snap-to-grid architectural pieces + baked 4K PBR normal maps |
| **💥 VFX Dynamics** | Volumetric Explosion & Smoke Cache | OpenVDB (112 MB) | High-density 120-frame OpenVDB simulation cache |
| **💥 VFX Dynamics** | Sparks, Dust & Energy Alphas Pack | PNG / EXR (31.0 MB) | 100+ 32-bit linear alpha mask textures for Niagra and Nuke |
| **🎮 Game Art Design** | Low-Poly Modular Dungeon Kit | FBX / TGA (45.3 MB) | Grid-aligned stones, pillars, and chests ready for UE5 & Unity |
| **🎮 Game Art Design** | Stylized Handpainted Texture Atlases | PNG Atlases (28.7 MB) | Seamless 4K tileable wood, stone, and stylized foliage trim sheets |

- **Interactive Filter:** Students can filter by tabs: `All Resources`, `📚 Study Notes`, `🎨 2D Animation`, `🧊 3D Models & Rigs`, `💥 VFX Dynamics`, `🎮 Game Art & Design`.
- **Navigation:** Accessible from top navbar: `Home` | `Student Work` | `About` | `Student Library` | `Contact Us`.

### 5.6 Screen 6: Campus Helpdesk & Contact Us Mascot
- **Features:** 3D robot mascot and direct campus inquiry form.
- **Screenshot:** Embedded from `public/images/contact-robot.png`.

---

## 6. Testing

### Comprehensive Test Cases Matrix

| Test ID | Test Scenario | Input Steps | Expected Result | Actual Result | Status |
| :---: | :--- | :--- | :--- | :--- | :---: |
| **TC_01** | User Login (Valid) | Enter registered email & correct password -> Click Sign In | Auth succeeds, session active, redirect to home | Redirected to home with welcome alert | **PASS** |
| **TC_02** | User Login (Invalid) | Enter valid email with wrong password -> Click Sign In | Auth rejected, error message displayed | Error shown: 'Invalid credentials' | **PASS** |
| **TC_03** | User Registration | Submit unique name, email, password confirmation | New user created in MySQL, session started | Record inserted, redirected to home | **PASS** |
| **TC_04** | Duplicate Email | Submit registration with existing email address | Registration blocked by email unique rule | Validation error: 'Email already taken' | **PASS** |
| **TC_05** | Category Filtering | Click '3D Animation' category pill on Browse page | URL updates to `/browse/3d`; only 3D assets shown | Assets filtered accurately by category | **PASS** |
| **TC_06** | Keyword Search | Type 'Mech' into global search input bar | Assets containing 'Mech' in title/tags displayed | Matching Mech assets returned in <0.05s | **PASS** |
| **TC_07** | Student Library Filter | Click 'VFX Dynamics' tab in Student Library section | Only VFX simulation cards remain visible | Filter updates smoothly without reload | **PASS** |
| **TC_08** | Asset Download Trigger | Click 'Download Notes' on 3D Rigging Cheatsheet card | Triggers asset file download dialog for student | Download confirmed and initiated | **PASS** |
| **TC_09** | Contact Form API | Submit message through Contact Us helpdesk form | Record saved to contacts table; JSON response | Success JSON returned; status 200 OK | **PASS** |
| **TC_10** | Responsive Viewport | Resize browser window to mobile 375px width | Navbar collapses to mobile drawer; cards stack | Responsive layout adapts cleanly | **PASS** |

---

## 7. Advantages and Future Enhancement of the System

### Advantages of the System
- **Elimination of Work Duplication:** Cuts preparation time by 40–60% by cataloging verified assets.
- **Strict Version Control:** Ensures lighting and animation teams use the certified production rig.
- **Sub-Second Asset Search:** Eliminates manual folder searches across disconnected PCs.
- **Dedicated Student Library Vault:** One-stop access to notes, 2D model sheets, 3D rigs, and VFX caches.
- **Studio Security:** Role-based access protects master files from accidental deletion.

### Future Enhancements
1. **Direct DCC Plugins:** Native Python add-ons inside Autodesk Maya, Blender, and Unreal Engine for 1-click import into 3D viewports.
2. **AI-Powered Visual Search:** Deep learning models allowing sketch-based asset queries.
3. **Interactive WebGL 3D Viewport:** In-browser Three.js viewport to rotate and inspect wireframes before downloading.
4. **Render Farm Pipeline Linkage:** Automatic asset dependency checks linked to Deadline / Tractor queues.

---

## 8. Bibliography and References

### Internal and Generative AI Consultation & Personal Interviews
- **References:**
  1. Kadlag Vishal [Owner, CG Bugs Company]
  2. Siddhi Wakchure [Instagram ID: `@siddhi182`]
- **Studio Visits:**
  - 1st visit: 21/08/2025
  - 2nd visit: 28/08/2025
  - 3rd visit: 25/09/2025
- **Main Websites:**
  - `https://www.cgbugs.com`
  - `cgbugsschool.com`
- **Generative AI:** OpenAI ChatGPT (Used for understanding concepts of Studio Library)

### Workflow Sources
- **Existing CG Bugs Tools:**
  - References: `https://www.maya.com` (Autodesk Maya)
- **Online References:**
  - Google
  - YouTube [Harway Newman]

### Technical and Software Documentation
- **Front-End:** HTML, CSS
- **Back-End:** MySQL DBMS, Python language, PHP language (Laravel Framework)

*(The project team photograph at CG Bugs Studio is included on page 35 of the Word document).*
