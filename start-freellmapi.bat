@echo off
title FreeLLMAPI Gateway Server
echo =========================================================
echo   Starting FreeLLMAPI Server (Port 3001) & UI (Port 5173)
echo =========================================================
echo.

set "PATH=C:\laragon\bin\nodejs\node-v22;%PATH%"
cd /d "C:\laragon\www\freellmapi"

call "C:\laragon\bin\nodejs\node-v22\npm.cmd" run dev

pause
