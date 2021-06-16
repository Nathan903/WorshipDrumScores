curl -X POST "https://api.cloudconvert.com/v2/jobs" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDYxN2Q1Y2Q1OGU2NjgzOWE5MzBmYmM2Yjk5MGVmNTFlZWY0MGM1ODhjMzNmMDU0NGY1NjYyM2M1ZmVkZWQ2M2MzNzE0ZTNhZDViYTI3NGEiLCJpYXQiOjE2MjM4Mzc2MDcuMzE3MDk0LCJuYmYiOjE2MjM4Mzc2MDcuMzE3MDk3LCJleHAiOjQ3Nzk1MTEyMDcuMjc5NTUyLCJzdWIiOiI1MTc5NTQ2NyIsInNjb3BlcyI6WyJwcmVzZXQud3JpdGUiLCJwcmVzZXQucmVhZCIsIndlYmhvb2sud3JpdGUiLCJ3ZWJob29rLnJlYWQiLCJ0YXNrLndyaXRlIiwidGFzay5yZWFkIiwidXNlci53cml0ZSIsInVzZXIucmVhZCJdfQ.ZEkfrU1MSRib5zZmeys8wgI3UBT9XPpq7F_LivPBTzVoFJVUc7wxdijRQfatnVikC940Pgs72cVHFHF0MClU_GJmZ4VpqXkGEmwMdwg9c4DBvILW9rHh_w4IPWpZKtu8b3Ux2WNEcqjGsMw06dYqifIdlbS_VOAokdNh3Z_Q-6QLggHNGGyi0tOOIt80IC_2AdKTQ2_yV0TZDLjVu2Umc-YZZERfUZgWY6hDwfyCAwqQ-ljxFBNRxInADWVhQNJxcoG5Pua6O05iZJ5T86OJoekfwbnonmJz8oI_NEnq44re_JWNTY-WRyHg3wl9jr64kb69sg64yQDUIRgs6EzzApJrb5WxpMvCQCRgtDXAdD9uj8omuC2V7FmlwBbB6-Wc_2r8eVWapoI1jGSteVgp0V5TT5gVQW7DFS5vABMcBzD2MgWGiEC7GRahwDaQ2Pk10ZE-y-DdfEaQ0yAoKCPsramvu90UJkI9vgY6v79IAMbhafbaH0v_z-AZh_V4HnRbtfkREzg6jdws408O-x6LumG_XmNMuD08wyF2wRf4FyWltC89hCOm9zvxXHEjoosFPdZYS8p_trYHIQKS_-erKMASXjJNBCPLiJurB7t9rB3c_yuieYZ4qZFP_Ri1v7V5-Z-EaCGwRKhAzKpUgUvyuUtGtpY9KJlkLD9UUZR7r1U" \
    -H "Content-type: application/json" \
    -d '{
    "tasks": {
        "import-1": {
            "operation": "import/url",
            "url": "https://raw.githubusercontent.com/Nathan903/WorshipDrumScores/main/pdftest/t.pdf",
            "filename": "t.pdf"
        },
        "task-1": {
            "operation": "convert",
            "input_format": "pdf",
            "output_format": "html",
            "engine": "pdf2htmlex",
            "input": [
                "import-1"
            ],
            "outline": false,
            "zoom": 1.5,
            "embed_css": true,
            "embed_javascript": true,
            "embed_images": true,
            "embed_fonts": true,
            "bg_format": "svg",
            "engine_version": "0.18.8",
            "filename": "test.html",
            "timeout": 300
        },
        "export-1": {
            "operation": "export/url",
            "input": [
                "task-1"
            ],
            "inline": false,
            "archive_multiple_files": false
        }
    }
}' 