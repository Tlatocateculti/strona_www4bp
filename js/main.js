
document.
querySelector('section > div.button').
onclick = function() { 
			let postStr=[]
			document.
			querySelectorAll('input[name=login]').
			forEach( 
				function(v,k) { 
					postStr[k]= `${v.dataset.pos}=${v.value}`
					//postStr[0] = 'nick=admin'
					//postStr[1] = 'pass=tajnehaslo'
					/*postStr+=v.dataset.pos +
								'='+ 
								v.value+'&'*/
				} 
			)
			postStr=postStr.join('&')
			//nick=admin&pass=tajnehaslo
			const xml = new XMLHttpRequest()
			xml.
			onreadystatechange = function() {
							document.querySelector('main').innerHTML = xml.responseText
							//console.log(xml)
						}	
			xml.open("POST","./php/login.php")
			xml.setRequestHeader('Content-type','application/x-www-form-urlencoded')
			xml.send(postStr)
		}
											

