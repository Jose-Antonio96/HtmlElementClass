Function Test-CommandExists {
    Param ($command)

    try {
        Get-Command $command
        return $true
    } catch {
        return $false
    }
}

if (-Not (Test-CommandExists "php")) {
    Write-Output "No está instalado php"
    Exit-PSSession
}

if (-Not (Test-CommandExists "node")) {
    Write-Output "No está instalado node"
    Exit-PSSession
}

if (-Not (Test-CommandExists "npm")) {
    Write-Output "No está instalado npm"
    Exit-PSSession
}


if (Test-Path -Path node_modules) {
    Write-Output "node_modules existe"
} else {
    $npm_process = Start-Process npm "i" -PassThru
    Wait-Process $npm_process.Id
}

Remove-Item -Force -Recurse .\dist
Remove-Item -Force -Recurse .\.parcel-cache
New-Item -Path . -Name "dist" -ItemType "directory"
New-Item -Path ".\dist\" -Name "fonts" -ItemType "directory"

Copy-Item ".\src\fonts\Roboto_Regular.json" -Destination ".\dist\fonts"

Start-Process npx "parcel", "src/index.html"
Set-Location ".\back"
Start-Process php "-S", "localhost:80"
Set-Location ".."

OpenWith.exe "http://localhost:1234"