@echo off
setlocal enabledelayedexpansion

rem Configurable variables
set "BRANCH=main"
set "INITIAL_COMMIT_MSG=Initial"

rem Cool Output Messages
echo ==============================
echo Welcome to the Bugfish Git Repository Reset Script!
echo ==============================
echo WARNING: This script will:
echo 1. Delete all commit history
echo 2. Create a new initial commit with current content
echo 3. Force push to the specified branch
echo ==============================
echo CAUTION: This action is irreversible!
echo ==============================

rem Confirm the user wants to proceed
set /p "confirm=Are you sure you want to proceed? (y/n): "
if /i not "!confirm!"=="y" (
    echo Operation cancelled.
    pause
    exit /b 1
)

rem Ask for remote origin URL
set /p "REPO_URL=Enter the remote repository URL (e.g., https://github.com/user/repo): "


:: Find the last version file in _changelogs/ folder and use its name (without extension) as default commit msg
set "defaultCommitMsg="
for /f "delims=" %%I in ('dir /a-d /b /o-d /tw "_changelogs" 2^>nul ^| findstr /r "^[0-9]*\."') do (
    set "defaultCommitMsg=%%~nI"
    goto :foundDefault
)

:foundDefault

:: Ask for commit message for this update (cannot be empty), default to changelog filename or initial
set "commitMsg=%defaultCommitMsg%"
if "!commitMsg!"=="" set "commitMsg=%INITIAL_COMMIT_MSG%"
echo Default commit message: "!commitMsg!"
set /p "commitMsg=Enter your commit message [!commitMsg!]: "
if "!commitMsg!"=="" set "commitMsg=%INITIAL_COMMIT_MSG%"

rem Cool message before starting the Git commands
echo ==============================
echo Resetting repository to !REPO_URL!...
echo ==============================

rem Check if Git is installed [web:17]
where git >nul 2>&1
if %errorlevel% neq 0 (
    echo Git is not installed or not in the system PATH.
    pause
    exit /b 1
)

rem Remove Git Folder
if exist ".git" (
    echo Removing existing .git directory...
    rmdir /s /q .git
)

rem Initialize a new Git repository
git init

rem Stage all files
git add .

rem Create a new initial commit
git commit -m "!commitMsg!"

rem Add the remote origin and push [web:6]
git remote add origin !REPO_URL!
git checkout -b %BRANCH%
git push -f origin %BRANCH%

rem Completion message
echo ==============================
echo All done!
echo All previous history has been erased.
echo ==============================
pause

endlocal
