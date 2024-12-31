const product=[
    {
        id:0,
        image:"images/redElevate.jpeg",
        title: 'Chocolate Cake',
        price: 55.00
    },
    {

        id:1,
        image:'images/redElevate.jpeg',
        title: 'Red Velvate',
        price: 80.00
    } ,
    {

        id:2,
        image:'assest/img/VanilaCake.jpeg',
        title: 'Vanila Cake',
        price: 70.00
    }
    ,  {

        id:3,
        image:'assest/img/uniCorn.jpeg',
        title: 'Unicorn Cake',
        price: 150.00
    }
    ,  {

        id:4,
        image:'assest/img/SpidermanCake.jpeg',
        title: 'Spiderman Cake',
        price: 180.00
    }
    ,  {

        id:5,
        image:'assest/img/spongpopcake.jpeg',
        title: 'SpongeBob Cake',
        price: 120.00
    }
    ,  {

        id:6,
        image:'assest/img/Oreo%20cake.jpeg',
        title: 'Oreo Cake',
        price: 70.00
    }
    ,  {

        id:7,
        image:'assest/img/Blueberry%20cake.jpeg',
        title: 'Blueberry Cake',
        price: 130.00
    }
    ,  {

        id:8,
        image:'assest/img/Lemon%20cake.jpeg',
        title: 'Lemon Cake',
        price: 75.00
    }
    ,  {

        id:9,
        image:'assest/img/Pink%20and%20Gold%20Baby.jpeg',
        title: 'Pink and Gold Baby Cake',
        price: 145.00
    }
    ,  {

        id:10,
        image:'assest/img/PP.jpeg',
        title: 'Princess Cake',
        price: 75.00
    }
    ,  {

        id:11,
        image:'assest/img/Bear%20cake.jpeg',
        title: 'Bear Cake',
        price: 75.00
    }
    ,  {

        id:12,
        image:'assest/img/RABBIT.jpeg',
        title: 'Rabbit Cake',
        price: 150.00
    }
    ,  {

        id:13,
        image:'assest/img/CHERRY.jpeg',
        title: 'Cherry Cake',
        price: 150.00
    }
    ,  {

        id:14,
        image:'assest/img/Al-Juri.jpeg',
        title: 'Al-Juri Cake',
        price: 150.00
    }
    ,  {

        id:15,
        image:'assest/img/cookiees.jpeg',
        title: 'Cookies',
        price: 30.00
    }
    ,  {

        id:16,
        image:'assest/img/chocolateCookies.jpeg',
        title: 'Chocolate Cookies',
        price: 30.00
    }
    ,  {

        id:17,
        image:'assest/img/loutsCookies.jpeg',
        title: 'Louts Cookies',
        price: 35.00
    }
    ,  {

        id:18,
        image:'assest/img/cookies.jpeg',
        title: 'cookies with chips chocolate',
        price: 25.00
    }
];

const categories =[... new Set(product.map((item)=>{return item}))]
let i=0;
document.getElementById('root').innerHTML= categories.map((item)=>{
    var{ image , titel , price}=item;
    return(
        `<div class='box'>
<div class='img-box'>
<img class='images' src=${image}></img>
</div>
<div class='bottom'>
<p>${titel}</p>
<h2>${price}</h2>`+
        "<button onclick ='addtocart("+(i++)+")'>Add to cart</button>"+

        `</div>
</div>`
    )
}).join('')

var cart =[];
function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.slice(a,1);
    displaycart();
}
function displaycart(a){
    let j=0 , total=0;
    document.getElementById("count").innerHTML= cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML= "Your cart is empty";
        document.getElementById("total").innerHTML= "NIS"+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML=cart.map((items)=>{
            var {image,titel,price}=items;
            document.getElementById("total").innerHTML="NIS"+total+".00";
            return(
                <div class='cart-item'>
                    <div class='row-img'>
                        <img class='rowing' src=${image}> </img>

                    </div>
                    <p style='font-size:12px;'>${titel}</p>
                    <h2 style='font-size:15px;'>$ ${price}</h2>
                    <i class='fa-solid fa-trash' onclinc='delElement("+(j++)+")'></i>
                </div>
            );
        }).join('');
    }
}

