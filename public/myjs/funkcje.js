function submitNewsletter() 		//funckcja walidujaca email do newslettera

function addToBasket(id)				//dodanie przedmiotu do koszyka
{
	var produkt = {};
	switch(id)
	{
		case 0:
		{
			produkt.nazwa = "Wędka";		
			produkt.cena = 80;
			produkt.ilosc = productQuantity(produkt);		//zbadanie ilosci przedmiotow w localStorage
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));		//dodanie przedmiotu do localStorage
			break;
		}
		case 1:
		{
			produkt.nazwa = "Wędka2";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);		//zbadanie ilosci przedmiotow w localStorage
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));			
			break;
		}
		case 2:
		{
			produkt.nazwa = "Kołowrotek";
			produkt.cena = 120;
			produkt.ilosc =  productQuantity(produkt);		//zbadanie ilosci przedmiotow w localStorage
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));		//dodanie przedmiotu do localStorage			
			break;
		}
		case 3:
		{
			produkt.nazwa = "Żyłka";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);		//...
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));		//...	
			break;
		}
		case 4:
		{
			produkt.nazwa = "Przynęta";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));			
			break;
		}
		case 5:
		{
			produkt.nazwa = "Plecak";
			produkt.cena = 80;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));			
			break;
		}
		case 6:
		{
			produkt.nazwa = "Haczyk";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));			
			break;
		}
		case 7:
		{
			produkt.nazwa = "Podbierak";
			produkt.cena = 120;
			productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));				
			break;
		}
		case 8:
		{
			produkt.nazwa = "Spławik";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));				
			break;
		}
		case 9:
		{
			produkt.nazwa = "Kalosze";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));				
			break;
		}
		case 10:
		{
			produkt.nazwa = "Świetlik";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));				
			break;
		}
		case 11:
		{
			produkt.nazwa = "Kołowrotek2";
			produkt.cena = 120;
			produkt.ilosc = productQuantity(produkt);
			localStorage.setItem(produkt.nazwa, JSON.stringify(produkt));				
			break;
		}
		default:
		{
			break;
		}
		
	}
}

function contactForm()		//walidacja formularza kontaktowego
{
	var wiadomosc = {};
	wiadomosc.imie = document.getElementById("imie").value;
	wiadomosc.nazwisko = document.getElementById("nazwisko").value;
	wiadomosc.temat = document.getElementById("temat").value;
	wiadomosc.tresc = document.getElementById("tresc").value;
	
}





var tresc="";