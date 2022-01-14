# Oplossing en manier van denken
## Gemaakt door Kaan Secen

# Idee
Bij de latavel opdracht had ik al een goed beeld van wat er precies gemaakt moest worden. Ik had voor deze opdracht wat onderzoek gedaan naar Larvel OA2Auth  Mijn voorkeur zit meer op back-end dus dit was wel een leuke uitdaging voor mij.

# Aanpak
Ik heb eerst een Console commando aan gemaakt waardoor je een API_Token kan aanmaken. Die token heb je altijd nodig om binnen de API te kunnen komen. Je alleen de informatie zien van je EIGEN API_Token

Mijn oplossing voor dit probleem is door API_Tokens te vereisen bij het gebruik van de API.

**Om een ​​API_Token te maken, moet u de volgende lijn uitvoeren:**
```php
php artisan create:token
// Hoe werkt het precies? -> App/Console/Commands/GenerateAuthToken.php
```
*Voorbeeld uitkomst:*
```php 
YpfM7N5HAr17MNFUfk0wfWUzIpF9X0KQzVZVDgjYMbD6n0KeSGmKpnUjDjgO
```
**Je hebt de API_Token nodig om een ​​titel en beschrijving te plaatsen<br>Om een ​​nieuwe POST te maken, moet je de volgende opdracht uitvoeren:**
```
curl -i -X POST -H "Accept:application/json" -H "Content-Type:application/json" -d "{\"title\": \"Example Text\",\"description\" : \"Test Example\"}" http://127.0.0.1:8000/api/todo?api_token={YOUR-API-TOKEN}
```
*Opmerking: je kunt je POST alleen zien als je de API_Token hebt*

*De POST-links naar uw API_Token*

*U kunt geen nieuwe POST maken zonder API_Token*

**Je hebt de API_Token nodig om je POST te zien**
**Lijst alle TODO's op de API_Token**
```
curl --location --request GET "http://127.0.0.1:8000/api/todo?api_token={YOUR-API-TOKEN}" --header "Accept: application/json"
```
*Opmerking: je kunt alleen de berichten zien die je hebt gemaakt met de API_Token*
