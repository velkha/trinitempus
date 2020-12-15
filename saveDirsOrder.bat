@echo off
set myDate=%date:~-4%%date:~3,2%%date:~0,2%_%time:~0,2%%time:~3,2%%time:~6,2%
dir /s >> "Capturas del Progreso"/GitHub/%myDate%_gitDirs.dir