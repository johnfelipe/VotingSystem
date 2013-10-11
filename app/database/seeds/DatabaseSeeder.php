<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('ConstituenciesTableSeeder');
        $this->call('PoliticalPartySeeder');
        $this->call('VotersTableSeeder');
	}

}
class PoliticalPartySeeder extends Seeder {
    public function run()
    {
        DB::table('political_parties')->delete();
        PoliticalParty::create(array('name'=>'Alliance Party of Northern Ireland'));
        PoliticalParty::create(array('name'=>'British National Party'));
        PoliticalParty::create(array('name'=>'Conservative and Unionist Party'));
        PoliticalParty::create(array('name'=>'Democratic Unionist Party'));
        PoliticalParty::create(array('name'=>'Green Party in Northern Ireland'));
        PoliticalParty::create(array('name'=>'Green Party of England and Wales'));
        PoliticalParty::create(array('name'=>'Labour Party'));
        PoliticalParty::create(array('name'=>'Liberal Democrats'));
        PoliticalParty::create(array('name'=>'Plaid Cymru - Party of Wales'));
        PoliticalParty::create(array('name'=>'Respect Party'));
        PoliticalParty::create(array('name'=>'Scottish Green Party'));
        PoliticalParty::create(array('name'=>'Scottish National Party'));
        PoliticalParty::create(array('name'=>'Social Democratic and Labour Party'));
        PoliticalParty::create(array('name'=>'Traditional Unionist Voice'));
        PoliticalParty::create(array('name'=>'UK Independence Party'));
        PoliticalParty::create(array('name'=>'Ulster Unionist Party'));
        PoliticalParty::create(array('name'=>'Sinn Féin'));
    }
}


class VotersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('voters')->delete();
        
        // generate some random users
        $users = array(
            'Max Bendickson',
            'Hermina Boyce',
            'Donella Stith',
            'Deborah Steinbach',
            'Elbert Harp',
            'Jerlene Horan',
            'Dinorah Matranga',
            'Pat Gaal',
            'Barton Weidler',
            'Dona Waggener',
            'Jesus Jacquez',
            'Elza Schiller',
            'Fredric Eller',
            'Mireille Klemm',
            'Arcelia Hammes',
            'Arlyne Yingling',
            'Deadra Behr',
            'Corinna Standard',
            'Marleen Trujillo',
            'Alina Grout',
            'Clint Kirchoff',
            'Everette Sickles',
            'Vincenzo Rohn',
            'Cathi Bohn',
            'Antonina Lew',
            'Felica Sweeney',
            'Davina Cruce',
            'Domenica Cappel',
            'Hassie Guillaume',
            'Kelvin Roane',
            'Hiroko Viola',
            'Desiree Estevez',
            'Edwardo Fey',
            'Cristen Quirion',
            'Angeles Tamura',
            'Marquitta Collette',
            'Rosalia Ealey',
            'Coralie Boswell',
            'Norah Breuer',
            'Keitha Lillibridge',
            'Kattie Nelsen',
            'Chasity Dietrick',
            'Franchesca Purtee',
            'Hester Gilman',
            'Olin Bonn',
            'Eldridge Kratochvil',
            'Bruna Petti',
            'Librada Tellis',
            'Gwendolyn Frasure',
            'Toshiko Wachter',
            'Kiesha Heras',
            'Cordia Oiler',
            'Demarcus Gervasi',
            'Alvera Worden',
            'Golden Ference',
            'Nakita Mader',
            'Portia Bing',
            'Deloise Saraiva',
            'Oneida Oshields',
            'Milton Emrick',
            'Mina Stanwood',
            'Dorcas Infantino',
            'Ardelia Goodson',
            'Ja Feagins',
            'Karyl Kearns',
            'Darline Roles',
            'Sharron Daulton',
            'Kali Arrigo',
            'Shara Traub',
            'Jonie Condon',
            'Cassie Laura',
            'Ignacio Woolum',
            'Benny Anton',
            'Clifton Lachapelle',
            'Guillermina Hoos',
            'Margaret Tavera',
            'Pauline Moodie',
            'Juliette Marcinko',
            'Saran Toal',
            'Tomas Kleinschmidt',
            'Elma Bogner',
            'Leigh Washinton',
            'Natasha Matlock',
            'Barry Leonetti',
            'Zack Ponder',
            'Shoshana Paavola',
            'Silvia Weese',
            'Todd Schwenk',
            'Dorothea Kinchen',
            'Lincoln Merrigan',
            'Lora Depaz',
            'Lavern Kluge',
            'Suzette Champagne',
            'Brandi Hebron',
            'Katherina Hovis',
            'Maile Charlie',
            'Trent Brett',
            'Lashaun Slavens',
            'Kandice Le',
            'Genaro Baver'
        );
        
        // weed out possible duplicates
        array_filter($users);
        
        // get seeding!
        foreach($users as $name) {
            Voter::create(
                array(
                    'name'=>$name,
                    'party_id'=>rand(1, 17),
                    'constituency_id'=>rand(1, 650),
                    'voting'=>true
                )
            );
        }  
    }
}

class ConstituenciesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('constituencies')->delete();
        Constituency::create(array('constituency'=>'Hackney North and Stoke Newington', 'mp_name'=>'Abbott, Diane (Labour)'));
        Constituency::create(array('constituency'=>'Oldham East and Saddleworth', 'mp_name'=>'Abrahams, Debbie (Labour)'));
        Constituency::create(array('constituency'=>'Selby and Ainsty', 'mp_name'=>'Adams, Nigel (Conservative)'));
        Constituency::create(array('constituency'=>'Windsor', 'mp_name'=>'Afriyie, Adam (Conservative)'));
        Constituency::create(array('constituency'=>'Coventry North East', 'mp_name'=>'Ainsworth, Bob (Labour)'));
        Constituency::create(array('constituency'=>'Waveney', 'mp_name'=>'Aldous, Peter (Conservative)'));
        Constituency::create(array('constituency'=>'Inverness, Nairn, Badenoch and Strathspey', 'mp_name'=>'Alexander, Danny (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Paisley and Renfrewshire South', 'mp_name'=>'Alexander, Douglas (Labour)'));
        Constituency::create(array('constituency'=>'Lewisham East', 'mp_name'=>'Alexander, Heidi (Labour)'));
        Constituency::create(array('constituency'=>'Bethnal Green and Bow', 'mp_name'=>'Ali, Rushanara (Labour)'));
        Constituency::create(array('constituency'=>'Nottingham North', 'mp_name'=>'Allen, Graham (Labour)'));
        Constituency::create(array('constituency'=>'Southend West', 'mp_name'=>'Amess, David (Conservative)'));
        Constituency::create(array('constituency'=>'Blaydon', 'mp_name'=>'Anderson, David (Labour)'));
        Constituency::create(array('constituency'=>'Pudsey', 'mp_name'=>'Andrew, Stuart (Conservative)'));
        Constituency::create(array('constituency'=>'North East Hampshire', 'mp_name'=>'Arbuthnot, James (Conservative)'));
        Constituency::create(array('constituency'=>'Leicester South', 'mp_name'=>'Ashworth, Jonathan (Labour)'));
        Constituency::create(array('constituency'=>'Dudley North', 'mp_name'=>'Austin, Ian (Labour)'));
        Constituency::create(array('constituency'=>'South Norfolk', 'mp_name'=>'Bacon, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'West Bromwich West', 'mp_name'=>'Bailey, Adrian (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Glasgow North East', 'mp_name'=>'Bain, William (Labour)'));
        Constituency::create(array('constituency'=>'Lewes', 'mp_name'=>'Baker, Norman (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Wycombe', 'mp_name'=>'Baker, Steve (Conservative)'));
        Constituency::create(array('constituency'=>'Banbury', 'mp_name'=>'Baldry, Tony (Conservative)'));
        Constituency::create(array('constituency'=>'West Worcestershire', 'mp_name'=>'Baldwin, Harriett (Conservative)'));
        Constituency::create(array('constituency'=>'Morley and Outwood', 'mp_name'=>'Balls, Ed (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Ochil and South Perthshire', 'mp_name'=>'Banks, Gordon (Labour)'));
        Constituency::create(array('constituency'=>'North East Cambridgeshire', 'mp_name'=>'Barclay, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Bexhill and Battle', 'mp_name'=>'Barker, Gregory (Conservative)'));
        Constituency::create(array('constituency'=>'Basildon and Billericay', 'mp_name'=>'Baron, John (Conservative)'));
        Constituency::create(array('constituency'=>'Rother Valley', 'mp_name'=>'Barron, Kevin (Labour)'));
        Constituency::create(array('constituency'=>'Croydon Central', 'mp_name'=>'Barwell, Gavin (Conservative)'));
        Constituency::create(array('constituency'=>'York Central', 'mp_name'=>'Bayley, Hugh (Labour)'));
        Constituency::create(array('constituency'=>'Aberconwy', 'mp_name'=>'Bebb, Guto (Conservative)'));
        Constituency::create(array('constituency'=>'Derby South', 'mp_name'=>'Beckett, Margaret (Labour)'));
        Constituency::create(array('constituency'=>'Aberdeen South', 'mp_name'=>'Begg, Anne (Labour)'));
        Constituency::create(array('constituency'=>'Berwick-upon-Tweed', 'mp_name'=>'Beith, Alan (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'North West Norfolk', 'mp_name'=>'Bellingham, Henry (Conservative)'));
        Constituency::create(array('constituency'=>'Leeds Central', 'mp_name'=>'Benn, Hilary (Labour)'));
        Constituency::create(array('constituency'=>'Bootle', 'mp_name'=>'Benton, Joe (Labour)'));
        Constituency::create(array('constituency'=>'Newbury', 'mp_name'=>'Benyon, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'Buckingham', 'mp_name'=>'Bercow, John (Speaker)'));
        Constituency::create(array('constituency'=>'Mole Valley', 'mp_name'=>'Beresford, Paul (Conservative)'));
        Constituency::create(array('constituency'=>'Liverpool, Wavertree', 'mp_name'=>'Berger, Luciana (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Rossendale and Darwen', 'mp_name'=>'Berry, Jake (Conservative)'));
        Constituency::create(array('constituency'=>'Sheffield South East', 'mp_name'=>'Betts, Clive (Labour)'));
        Constituency::create(array('constituency'=>'High Peak', 'mp_name'=>'Bingham, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Northampton South', 'mp_name'=>'Binley, Brian (Conservative)'));
        Constituency::create(array('constituency'=>'Burnley', 'mp_name'=>'Birtwistle, Gordon (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Harrow East', 'mp_name'=>'Blackman, Bob (Conservative)'));
        Constituency::create(array('constituency'=>'City of Durham', 'mp_name'=>'Blackman-Woods, Roberta (Labour)'));
        Constituency::create(array('constituency'=>'Oxford West and Abingdon', 'mp_name'=>'Blackwood, Nicola (Conservative)'));
        Constituency::create(array('constituency'=>'Salford and Eccles', 'mp_name'=>'Blears, Hazel (Labour)'));
        Constituency::create(array('constituency'=>'Middlesbrough South and East Cleveland', 'mp_name'=>'Blenkinsop, Tom (Labour)'));
        Constituency::create(array('constituency'=>'Sheffield Central', 'mp_name'=>'Blomfield, Paul (Labour)'));
        Constituency::create(array('constituency'=>'Sheffield, Brightside and Hillsborough', 'mp_name'=>'Blunkett, David (Labour)'));
        Constituency::create(array('constituency'=>'Reigate', 'mp_name'=>'Blunt, Crispin (Conservative)'));
        Constituency::create(array('constituency'=>'Grantham and Stamford', 'mp_name'=>'Boles, Nick (Conservative)'));
        Constituency::create(array('constituency'=>'Wellingborough', 'mp_name'=>'Bone, Peter (Conservative)'));
        Constituency::create(array('constituency'=>'Worthing West', 'mp_name'=>'Bottomley, Peter (Conservative)'));
        Constituency::create(array('constituency'=>'Staffordshire Moorlands', 'mp_name'=>'Bradley, Karen (Conservative)'));
        Constituency::create(array('constituency'=>'Exeter', 'mp_name'=>'Bradshaw, Ben (Labour)'));
        Constituency::create(array('constituency'=>'Altrincham and Sale West', 'mp_name'=>'Brady, Graham (Conservative)'));
        Constituency::create(array('constituency'=>'Carshalton and Wallington', 'mp_name'=>'Brake, Tom (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Ealing Central and Acton', 'mp_name'=>'Bray, Angie (Conservative)'));
        Constituency::create(array('constituency'=>'Canterbury', 'mp_name'=>'Brazier, Julian (Conservative)'));
        Constituency::create(array('constituency'=>'Cardiff West', 'mp_name'=>'Brennan, Kevin (Labour)'));
        Constituency::create(array('constituency'=>'North West Leicestershire', 'mp_name'=>'Bridgen, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Winchester', 'mp_name'=>'Brine, Steve (Conservative)'));
        Constituency::create(array('constituency'=>'Old Bexley and Sidcup', 'mp_name'=>'Brokenshire, James (Conservative)'));
        Constituency::create(array('constituency'=>'Mid Dorset and North Poole', 'mp_name'=>'Brooke, Annette (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Kirkcaldy and Cowdenbeath', 'mp_name'=>'Brown, Gordon (Labour)'));
        Constituency::create(array('constituency'=>'West Ham', 'mp_name'=>'Brown, Lyn (Labour)'));
        Constituency::create(array('constituency'=>'Newcastle upon Tyne East', 'mp_name'=>'Brown, Nicholas (Labour)'));
        Constituency::create(array('constituency'=>'Dumfries and Galloway', 'mp_name'=>'Brown, Russell (Labour)'));
        Constituency::create(array('constituency'=>'Taunton Deane', 'mp_name'=>'Browne, Jeremy (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Congleton', 'mp_name'=>'Bruce, Fiona (Conservative)'));
        Constituency::create(array('constituency'=>'Gordon', 'mp_name'=>'Bruce, Malcolm (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Rhondda', 'mp_name'=>'Bryant, Chris (Labour)'));
        Constituency::create(array('constituency'=>'Westminster North', 'mp_name'=>'Buck, Karen (Labour)'));
        Constituency::create(array('constituency'=>'South Swindon', 'mp_name'=>'Buckland, Robert (Conservative)'));
        Constituency::create(array('constituency'=>'Birmingham, Northfield', 'mp_name'=>'Burden, Richard (Labour)'));
        Constituency::create(array('constituency'=>'Cannock Chase', 'mp_name'=>'Burley, Aidan (Conservative)'));
        Constituency::create(array('constituency'=>'Leigh', 'mp_name'=>'Burnham, Andy (Labour)'));
        Constituency::create(array('constituency'=>'Bournemouth West', 'mp_name'=>'Burns, Conor (Conservative)'));
        Constituency::create(array('constituency'=>'Chelmsford', 'mp_name'=>'Burns, Simon (Conservative)'));
        Constituency::create(array('constituency'=>'Enfield, Southgate', 'mp_name'=>'Burrowes, David (Conservative)'));
        Constituency::create(array('constituency'=>'Sutton and Cheam', 'mp_name'=>'Burstow, Paul (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'North East Bedfordshire', 'mp_name'=>'Burt, Alistair (Conservative)'));
        Constituency::create(array('constituency'=>'Solihull', 'mp_name'=>'Burt, Lorely (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'North Warwickshire', 'mp_name'=>'Byles, Dan (Conservative)'));
        Constituency::create(array('constituency'=>'Birmingham, Hodge Hill', 'mp_name'=>'Byrne, Liam (Labour)'));
        Constituency::create(array('constituency'=>'Twickenham', 'mp_name'=>'Cable, Vince (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Vale of Glamorgan', 'mp_name'=>'Cairns, Alun (Conservative)'));
        Constituency::create(array('constituency'=>'Witney', 'mp_name'=>'Cameron, David (Conservative)'));
        Constituency::create(array('constituency'=>'Tynemouth', 'mp_name'=>'Campbell, Alan (Labour)'));
        Constituency::create(array('constituency'=>'East Londonderry', 'mp_name'=>'Campbell, Gregory (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'North East Fife', 'mp_name'=>'Campbell, Menzies (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Blyth Valley', 'mp_name'=>'Campbell, Ronnie (Labour)'));
        Constituency::create(array('constituency'=>'Orkney and Shetland', 'mp_name'=>'Carmichael, Alistair (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Stroud', 'mp_name'=>'Carmichael, Neil (Conservative)'));
        Constituency::create(array('constituency'=>'Clacton', 'mp_name'=>'Carswell, Douglas (Conservative)'));
        Constituency::create(array('constituency'=>'Stone', 'mp_name'=>'Cash, William (Conservative)'));
        Constituency::create(array('constituency'=>'Gower', 'mp_name'=>'Caton, Martin (Labour)'));
        Constituency::create(array('constituency'=>'Rotherham', 'mp_name'=>'Champion, Sarah (Labour)'));
        Constituency::create(array('constituency'=>'Darlington', 'mp_name'=>'Chapman, Jenny (Labour)'));
        Constituency::create(array('constituency'=>'Gillingham and Rainham', 'mp_name'=>'Chishti, Rehman (Conservative)'));
        Constituency::create(array('constituency'=>'Christchurch', 'mp_name'=>'Chope, Christopher (Conservative)'));
        Constituency::create(array('constituency'=>'Hertsmere', 'mp_name'=>'Clappison, James (Conservative)'));
        Constituency::create(array('constituency'=>'Tunbridge Wells', 'mp_name'=>'Clark, Greg (Conservative)'));
        Constituency::create(array('constituency'=>'North Ayrshire and Arran', 'mp_name'=>'Clark, Katy (Labour)'));
        Constituency::create(array('constituency'=>'Rushcliffe', 'mp_name'=>'Clarke, Kenneth (Conservative)'));
        Constituency::create(array('constituency'=>'Coatbridge, Chryston and Bellshill', 'mp_name'=>'Clarke, Tom (Labour)'));
        Constituency::create(array('constituency'=>'Sheffield, Hallam', 'mp_name'=>'Clegg, Nick (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'The Cotswolds', 'mp_name'=>'Clifton-Brown, Geoffrey (Conservative)'));
        Constituency::create(array('constituency'=>'Cynon Valley', 'mp_name'=>'Clwyd, Ann (Labour)'));
        Constituency::create(array('constituency'=>'Gedling', 'mp_name'=>'Coaker, Vernon (Labour)'));
        Constituency::create(array('constituency'=>'Stockport', 'mp_name'=>'Coffey, Ann (Labour)'));
        Constituency::create(array('constituency'=>'Suffolk Coastal', 'mp_name'=>'Coffey, Thérèse (Conservative)'));
        Constituency::create(array('constituency'=>'Folkestone and Hythe', 'mp_name'=>'Collins, Damian (Conservative)'));
        Constituency::create(array('constituency'=>'Plymouth, Sutton and Devonport', 'mp_name'=>'Colvile, Oliver (Conservative)'));
        Constituency::create(array('constituency'=>'Linlithgow and East Falkirk', 'mp_name'=>'Connarty, Michael (Labour)'));
        Constituency::create(array('constituency'=>'West Lancashire', 'mp_name'=>'Cooper, Rosie (Labour)'));
        Constituency::create(array('constituency'=>'Normanton, Pontefract and Castleford', 'mp_name'=>'Cooper, Yvette (Labour)'));
        Constituency::create(array('constituency'=>'Islington North', 'mp_name'=>'Corbyn, Jeremy (Labour)'));
        Constituency::create(array('constituency'=>'Torridge and West Devon', 'mp_name'=>'Cox, Geoffrey (Conservative)'));
        Constituency::create(array('constituency'=>'Preseli Pembrokeshire', 'mp_name'=>'Crabb, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Bolton North East', 'mp_name'=>'Crausby, David (Labour)'));
        Constituency::create(array('constituency'=>'Wakefield', 'mp_name'=>'Creagh, Mary (Labour)'));
        Constituency::create(array('constituency'=>'Walthamstow', 'mp_name'=>'Creasy, Stella (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Edinburgh West', 'mp_name'=>'Crockart, Mike (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Chatham and Aylesford', 'mp_name'=>'Crouch, Tracey (Conservative)'));
        Constituency::create(array('constituency'=>'Dagenham and Rainham', 'mp_name'=>'Cruddas, Jon (Labour)'));
        Constituency::create(array('constituency'=>'Leyton and Wanstead', 'mp_name'=>'Cryer, John (Labour)'));
        Constituency::create(array('constituency'=>'Stockton North', 'mp_name'=>'Cunningham, Alex (Labour)'));
        Constituency::create(array('constituency'=>'Coventry South', 'mp_name'=>'Cunningham, Jim (Labour)'));
        Constituency::create(array('constituency'=>'Workington', 'mp_name'=>'Cunningham, Tony (Labour)'));
        Constituency::create(array('constituency'=>'Glasgow East', 'mp_name'=>'Curran, Margaret (Labour)'));
        Constituency::create(array('constituency'=>'Scunthorpe', 'mp_name'=>'Dakin, Nic (Labour)'));
        Constituency::create(array('constituency'=>'Rochdale', 'mp_name'=>'Danczuk, Simon (Labour)'));
        Constituency::create(array('constituency'=>'Edinburgh South West', 'mp_name'=>'Darling, Alistair (Labour)'));
        Constituency::create(array('constituency'=>'Kingston and Surbiton', 'mp_name'=>'Davey, Edward (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Caerphilly', 'mp_name'=>'David, Wayne (Labour)'));
        Constituency::create(array('constituency'=>'Glasgow South West', 'mp_name'=>'Davidson, Ian (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Monmouth', 'mp_name'=>'Davies, David T. C. (Conservative)'));
        Constituency::create(array('constituency'=>'Swansea West', 'mp_name'=>'Davies, Geraint (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Montgomeryshire', 'mp_name'=>'Davies, Glyn (Conservative)'));
        Constituency::create(array('constituency'=>'Shipley', 'mp_name'=>'Davies, Philip (Conservative)'));
        Constituency::create(array('constituency'=>'Haltemprice and Howden', 'mp_name'=>'Davis, David (Conservative)'));
        Constituency::create(array('constituency'=>'Enfield North', 'mp_name'=>'de Bois, Nick (Conservative)'));
        Constituency::create(array('constituency'=>'Ashfield', 'mp_name'=>'De Piero, Gloria (Labour)'));
        Constituency::create(array('constituency'=>'Southampton, Itchen', 'mp_name'=>'Denham, John (Labour)'));
        Constituency::create(array('constituency'=>'Gosport', 'mp_name'=>'Dinenage, Caroline (Conservative)'));
        Constituency::create(array('constituency'=>'Huntingdon', 'mp_name'=>'Djanogly, Jonathan (Conservative)'));
        Constituency::create(array('constituency'=>'Heywood and Middleton', 'mp_name'=>'Dobbin, Jim (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Holborn and St Pancras', 'mp_name'=>'Dobson, Frank (Labour)'));
        Constituency::create(array('constituency'=>'Dunfermline and West Fife', 'mp_name'=>'Docherty, Thomas (Labour)'));
        Constituency::create(array('constituency'=>'Belfast North', 'mp_name'=>'Dodds, Nigel (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'West Tyrone', 'mp_name'=>'Doherty, Pat (Sinn Fein)'));
        Constituency::create(array('constituency'=>'Lagan Valley', 'mp_name'=>'Donaldson, Jeffrey M. (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'Central Ayrshire', 'mp_name'=>'Donohoe, Brian H. (Labour)'));
        Constituency::create(array('constituency'=>'Aberdeen North', 'mp_name'=>'Doran, Frank (Labour)'));
        Constituency::create(array('constituency'=>'Charnwood', 'mp_name'=>'Dorrell, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Mid Bedfordshire', 'mp_name'=>'Dorries, Nadine (Conservative)'));
        Constituency::create(array('constituency'=>'Cardiff South and Penarth', 'mp_name'=>'Doughty, Stephen (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Lewisham West and Penge', 'mp_name'=>'Dowd, Jim (Labour)'));
        Constituency::create(array('constituency'=>'West Dunbartonshire', 'mp_name'=>'Doyle, Gemma (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Thurrock', 'mp_name'=>'Doyle-Price, Jackie (Conservative)'));
        Constituency::create(array('constituency'=>'South Dorset', 'mp_name'=>'Drax, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'Birmingham, Erdington', 'mp_name'=>'Dromey, Jack (Labour)'));
        Constituency::create(array('constituency'=>'Rochford and Southend East', 'mp_name'=>'Duddridge, James (Conservative)'));
        Constituency::create(array('constituency'=>'Barnsley East', 'mp_name'=>'Dugher, Michael (Labour)'));
        Constituency::create(array('constituency'=>'Rutland and Melton', 'mp_name'=>'Duncan, Alan (Conservative)'));
        Constituency::create(array('constituency'=>'Chingford and Woodford Green', 'mp_name'=>'Duncan Smith, Iain (Conservative)'));
        Constituency::create(array('constituency'=>'Ludlow', 'mp_name'=>'Dunne, Philip (Conservative)'));
        Constituency::create(array('constituency'=>'Foyle', 'mp_name'=>'Durkan, Mark (Social Democratic & Labour Party)'));
        Constituency::create(array('constituency'=>'Wallasey', 'mp_name'=>'Eagle, Angela (Labour)'));
        Constituency::create(array('constituency'=>'Garston and Halewood', 'mp_name'=>'Eagle, Maria (Labour)'));
        Constituency::create(array('constituency'=>'Carmarthen East and Dinefwr', 'mp_name'=>'Edwards, Jonathan (Plaid Cymru)'));
        Constituency::create(array('constituency'=>'Eltham', 'mp_name'=>'Efford, Clive (Labour)'));
        Constituency::create(array('constituency'=>'Sunderland Central', 'mp_name'=>'Elliott, Julie (Labour)'));
        Constituency::create(array('constituency'=>'Northampton North', 'mp_name'=>'Ellis, Michael (Conservative)'));
        Constituency::create(array('constituency'=>'Battersea', 'mp_name'=>'Ellison, Jane (Conservative)'));
        Constituency::create(array('constituency'=>'Liverpool, Riverside', 'mp_name'=>'Ellman, Louise (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Bournemouth East', 'mp_name'=>'Ellwood, Tobias (Conservative)'));
        Constituency::create(array('constituency'=>'Dover', 'mp_name'=>'Elphicke, Charlie (Conservative)'));
        Constituency::create(array('constituency'=>'North East Derbyshire', 'mp_name'=>'Engel, Natascha (Labour)'));
        Constituency::create(array('constituency'=>'Sefton Central', 'mp_name'=>'Esterson, Bill (Labour)'));
        Constituency::create(array('constituency'=>'Camborne and Redruth', 'mp_name'=>'Eustice, George (Conservative)'));
        Constituency::create(array('constituency'=>'Islwyn', 'mp_name'=>'Evans, Chris (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Weaver Vale', 'mp_name'=>'Evans, Graham (Conservative)'));
        Constituency::create(array('constituency'=>'Cardiff North', 'mp_name'=>'Evans, Jonathan (Conservative)'));
        Constituency::create(array('constituency'=>'Ribble Valley', 'mp_name'=>'Evans, Nigel (Independent)'));
        Constituency::create(array('constituency'=>'Bexleyheath and Crayford', 'mp_name'=>'Evennett, David (Conservative)'));
        Constituency::create(array('constituency'=>'Lichfield', 'mp_name'=>'Fabricant, Michael (Conservative)'));
        Constituency::create(array('constituency'=>'Sevenoaks', 'mp_name'=>'Fallon, Michael (Conservative)'));
        Constituency::create(array('constituency'=>'Newcastle-under-Lyme', 'mp_name'=>'Farrelly, Paul (Labour)'));
        Constituency::create(array('constituency'=>'Westmorland and Lonsdale', 'mp_name'=>'Farron, Tim (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Hornsey and Wood Green', 'mp_name'=>'Featherstone, Lynne (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Birkenhead', 'mp_name'=>'Field, Frank (Labour)'));
        Constituency::create(array('constituency'=>'Cities of London and Westminster', 'mp_name'=>'Field, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Poplar and Limehouse', 'mp_name'=>'Fitzpatrick, Jim (Labour)'));
        Constituency::create(array('constituency'=>'Stoke-on-Trent South', 'mp_name'=>'Flello, Robert (Labour)'));
        Constituency::create(array('constituency'=>'Don Valley', 'mp_name'=>'Flint, Caroline (Labour)'));
        Constituency::create(array('constituency'=>'Newport West', 'mp_name'=>'Flynn, Paul (Labour)'));
        Constituency::create(array('constituency'=>'Bath', 'mp_name'=>'Foster, Don (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Makerfield', 'mp_name'=>'Fovargue, Yvonne (Labour)'));
        Constituency::create(array('constituency'=>'North Somerset', 'mp_name'=>'Fox, Liam (Conservative)'));
        Constituency::create(array('constituency'=>'Aberavon', 'mp_name'=>'Francis, Hywel (Labour)'));
        Constituency::create(array('constituency'=>'Rayleigh and Wickford', 'mp_name'=>'Francois, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Mid Norfolk', 'mp_name'=>'Freeman, George (Conservative)'));
        Constituency::create(array('constituency'=>'Finchley and Golders Green', 'mp_name'=>'Freer, Mike (Conservative)'));
        Constituency::create(array('constituency'=>'South Ribble', 'mp_name'=>'Fullbrook, Lorraine (Conservative)'));
        Constituency::create(array('constituency'=>'Bedford', 'mp_name'=>'Fuller, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'North Thanet', 'mp_name'=>'Gale, Roger (Conservative)'));
        Constituency::create(array('constituency'=>'Bradford West', 'mp_name'=>'Galloway, George (Respect)'));
        Constituency::create(array('constituency'=>'Ilford South', 'mp_name'=>'Gapes, Mike (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Brent North', 'mp_name'=>'Gardiner, Barry (Labour)'));
        Constituency::create(array('constituency'=>'Harborough', 'mp_name'=>'Garnier, Edward (Conservative)'));
        Constituency::create(array('constituency'=>'Wyre Forest', 'mp_name'=>'Garnier, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'South West Hertfordshire', 'mp_name'=>'Gauke, David (Conservative)'));
        Constituency::create(array('constituency'=>'St Ives', 'mp_name'=>'George, Andrew (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Bognor Regis and Littlehampton', 'mp_name'=>'Gibb, Nick (Conservative)'));
        Constituency::create(array('constituency'=>'St Austell and Newquay', 'mp_name'=>'Gilbert, Stephen (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Fermanagh and South Tyrone', 'mp_name'=>'Gildernew, Michelle (Sinn Fein)'));
        Constituency::create(array('constituency'=>'Chesham and Amersham', 'mp_name'=>'Gillan, Cheryl (Conservative)'));
        Constituency::create(array('constituency'=>'Edinburgh East', 'mp_name'=>'Gilmore, Sheila (Labour)'));
        Constituency::create(array('constituency'=>'North West Durham', 'mp_name'=>'Glass, Pat (Labour)'));
        Constituency::create(array('constituency'=>'Salisbury', 'mp_name'=>'Glen, John (Conservative)'));
        Constituency::create(array('constituency'=>'North Tyneside', 'mp_name'=>'Glindon, Mary (Labour)'));
        Constituency::create(array('constituency'=>'Birmingham, Hall Green', 'mp_name'=>'Godsiff, Roger (Labour)'));
        Constituency::create(array('constituency'=>'Wythenshawe and Sale East', 'mp_name'=>'Goggins, Paul (Labour)'));
        Constituency::create(array('constituency'=>'Richmond Park', 'mp_name'=>'Goldsmith, Zac (Conservative)'));
        Constituency::create(array('constituency'=>'Bishop Auckland', 'mp_name'=>'Goodman, Helen (Labour)'));
        Constituency::create(array('constituency'=>'Scarborough and Whitby', 'mp_name'=>'Goodwill, Robert (Conservative)'));
        Constituency::create(array('constituency'=>'Surrey Heath', 'mp_name'=>'Gove, Michael (Conservative)'));
        Constituency::create(array('constituency'=>'Gloucester', 'mp_name'=>'Graham, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'Maidstone and The Weald', 'mp_name'=>'Grant, Helen (Conservative)'));
        Constituency::create(array('constituency'=>'North Wiltshire', 'mp_name'=>'Gray, James (Conservative)'));
        Constituency::create(array('constituency'=>'Epsom and Ewell', 'mp_name'=>'Grayling, Chris (Conservative)'));
        Constituency::create(array('constituency'=>'Rutherglen and Hamilton West', 'mp_name'=>'Greatrex, Tom (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Ashford', 'mp_name'=>'Green, Damian (Conservative)'));
        Constituency::create(array('constituency'=>'Stretford and Urmston', 'mp_name'=>'Green, Kate (Labour)'));
        Constituency::create(array('constituency'=>'Putney', 'mp_name'=>'Greening, Justine (Conservative)'));
        Constituency::create(array('constituency'=>'Nottingham South', 'mp_name'=>'Greenwood, Lilian (Labour)'));
        Constituency::create(array('constituency'=>'Beaconsfield', 'mp_name'=>'Grieve, Dominic (Conservative)'));
        Constituency::create(array('constituency'=>'Llanelli', 'mp_name'=>'Griffith, Nia (Labour)'));
        Constituency::create(array('constituency'=>'Burton', 'mp_name'=>'Griffiths, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Ipswich', 'mp_name'=>'Gummer, Ben (Conservative)'));
        Constituency::create(array('constituency'=>'Denton and Reddish', 'mp_name'=>'Gwynne, Andrew (Labour)'));
        Constituency::create(array('constituency'=>'East Surrey', 'mp_name'=>'Gyimah, Sam (Conservative)'));
        Constituency::create(array('constituency'=>'Richmond (Yorks)', 'mp_name'=>'Hague, William (Conservative)'));
        Constituency::create(array('constituency'=>'Neath', 'mp_name'=>'Hain, Peter (Labour)'));
        Constituency::create(array('constituency'=>'Harlow', 'mp_name'=>'Halfon, Robert (Conservative)'));
        Constituency::create(array('constituency'=>'Chippenham', 'mp_name'=>'Hames, Duncan (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Midlothian', 'mp_name'=>'Hamilton, David (Labour)'));
        Constituency::create(array('constituency'=>'Leeds North East', 'mp_name'=>'Hamilton, Fabian (Labour)'));
        Constituency::create(array('constituency'=>'Runnymede and Weybridge', 'mp_name'=>'Hammond, Philip (Conservative)'));
        Constituency::create(array('constituency'=>'Wimbledon', 'mp_name'=>'Hammond, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'West Suffolk', 'mp_name'=>'Hancock, Matthew (Conservative)'));
        Constituency::create(array('constituency'=>'Portsmouth South', 'mp_name'=>'Hancock, Mike (Independent)'));
        Constituency::create(array('constituency'=>'Chelsea and Fulham', 'mp_name'=>'Hands, Greg (Conservative)'));
        Constituency::create(array('constituency'=>'Delyn', 'mp_name'=>'Hanson, David (Labour)'));
        Constituency::create(array('constituency'=>'Camberwell and Peckham', 'mp_name'=>'Harman, Harriet (Labour)'));
        Constituency::create(array('constituency'=>'Forest of Dean', 'mp_name'=>'Harper, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Watford', 'mp_name'=>'Harrington, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'Castle Point', 'mp_name'=>'Harris, Rebecca (Conservative)'));
        Constituency::create(array('constituency'=>'Glasgow South', 'mp_name'=>'Harris, Tom (Labour)'));
        Constituency::create(array('constituency'=>'Carmarthen West and South Pembrokeshire', 'mp_name'=>'Hart, Simon (Conservative)'));
        Constituency::create(array('constituency'=>'North Devon', 'mp_name'=>'Harvey, Nick (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Saffron Walden', 'mp_name'=>'Haselhurst, Alan (Conservative)'));
        Constituency::create(array('constituency'=>'Merthyr Tydfil and Rhymney', 'mp_name'=>'Havard, Dai (Labour)'));
        Constituency::create(array('constituency'=>'South Holland and The Deepings', 'mp_name'=>'Hayes, John (Conservative)'));
        Constituency::create(array('constituency'=>'North East Hertfordshire', 'mp_name'=>'Heald, Oliver (Conservative)'));
        Constituency::create(array('constituency'=>'Wentworth and Dearne', 'mp_name'=>'Healey, John (Labour)'));
        Constituency::create(array('constituency'=>'Somerton and Frome', 'mp_name'=>'Heath, David (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Daventry', 'mp_name'=>'Heaton-Harris, Chris (Conservative)'));
        Constituency::create(array('constituency'=>'Birmingham, Yardley', 'mp_name'=>'Hemming, John (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Sittingbourne and Sheppey', 'mp_name'=>'Henderson, Gordon (Conservative)'));
        Constituency::create(array('constituency'=>'Preston', 'mp_name'=>'Hendrick, Mark (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Wealden', 'mp_name'=>'Hendry, Charles (Conservative)'));
        Constituency::create(array('constituency'=>'Jarrow', 'mp_name'=>'Hepburn, Stephen (Labour)'));
        Constituency::create(array('constituency'=>'Arundel and South Downs', 'mp_name'=>'Herbert, Nick (Conservative)'));
        Constituency::create(array('constituency'=>'North Down', 'mp_name'=>'Hermon, Lady (Independent)'));
        Constituency::create(array('constituency'=>'Ashton-under-Lyne', 'mp_name'=>'Heyes, David (Labour)'));
        Constituency::create(array('constituency'=>'Hackney South and Shoreditch', 'mp_name'=>'Hillier, Meg (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Bolton West', 'mp_name'=>'Hilling, Julie (Labour)'));
        Constituency::create(array('constituency'=>'East Hampshire', 'mp_name'=>'Hinds, Damian (Conservative)'));
        Constituency::create(array('constituency'=>'Fareham', 'mp_name'=>'Hoban, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Barking', 'mp_name'=>'Hodge, Margaret (Labour)'));
        Constituency::create(array('constituency'=>'Washington and Sunderland West', 'mp_name'=>'Hodgson, Sharon (Labour)'));
        Constituency::create(array('constituency'=>'Vauxhall', 'mp_name'=>'Hoey, Kate (Labour)'));
        Constituency::create(array('constituency'=>'Meon Valley', 'mp_name'=>'Hollingbery, George (Conservative)'));
        Constituency::create(array('constituency'=>'Kettering', 'mp_name'=>'Hollobone, Philip (Conservative)'));
        Constituency::create(array('constituency'=>'Gravesham', 'mp_name'=>'Holloway, Adam (Conservative)'));
        Constituency::create(array('constituency'=>'Lanark and Hamilton East', 'mp_name'=>'Hood, Jim (Labour)'));
        Constituency::create(array('constituency'=>'Luton North', 'mp_name'=>'Hopkins, Kelvin (Labour)'));
        Constituency::create(array('constituency'=>'Keighley', 'mp_name'=>'Hopkins, Kris (Conservative)'));
        Constituency::create(array('constituency'=>'Cheltenham', 'mp_name'=>'Horwood, Martin (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Dundee East', 'mp_name'=>'Hosie, Stewart (Scottish National)'));
        Constituency::create(array('constituency'=>'Knowsley', 'mp_name'=>'Howarth, George (Labour)'));
        Constituency::create(array('constituency'=>'Aldershot', 'mp_name'=>'Howarth, Gerald (Conservative)'));
        Constituency::create(array('constituency'=>'Henley', 'mp_name'=>'Howell, John (Conservative)'));
        Constituency::create(array('constituency'=>'Chorley', 'mp_name'=>'Hoyle, Lindsay (Labour)'));
        Constituency::create(array('constituency'=>'Bermondsey and Old Southwark', 'mp_name'=>'Hughes, Simon (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'South West Surrey', 'mp_name'=>'Hunt, Jeremy (Conservative)'));
        Constituency::create(array('constituency'=>'Stoke-on-Trent Central', 'mp_name'=>'Hunt, Tristram (Labour)'));
        Constituency::create(array('constituency'=>'Cheadle', 'mp_name'=>'Hunter, Mark (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Cambridge', 'mp_name'=>'Huppert, Julian (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Ruislip, Northwood and Pinner', 'mp_name'=>'Hurd, Nick (Conservative)'));
        Constituency::create(array('constituency'=>'Ogmore', 'mp_name'=>'Irranca-Davies, Huw (Labour)'));
        Constituency::create(array('constituency'=>'Hampstead and Kilburn', 'mp_name'=>'Jackson, Glenda (Labour)'));
        Constituency::create(array('constituency'=>'Peterborough', 'mp_name'=>'Jackson, Stewart (Conservative)'));
        Constituency::create(array('constituency'=>'Stourbridge', 'mp_name'=>'James, Margot (Conservative)'));
        Constituency::create(array('constituency'=>'Swansea East', 'mp_name'=>'James, Siân C. (Labour)'));
        Constituency::create(array('constituency'=>'Kilmarnock and Loudoun', 'mp_name'=>'Jamieson, Cathy (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Barnsley Central', 'mp_name'=>'Jarvis, Dan (Labour)'));
        Constituency::create(array('constituency'=>'Bromsgrove', 'mp_name'=>'Javid, Sajid (Conservative)'));
        Constituency::create(array('constituency'=>'Harwich and North Essex', 'mp_name'=>'Jenkin, Bernard (Conservative)'));
        Constituency::create(array('constituency'=>'Kingston upon Hull West and Hessle', 'mp_name'=>'Johnson, Alan (Labour)'));
        Constituency::create(array('constituency'=>'Kingston upon Hull North', 'mp_name'=>'Johnson, Diana (Labour)'));
        Constituency::create(array('constituency'=>'Dartford', 'mp_name'=>'Johnson, Gareth (Conservative)'));
        Constituency::create(array('constituency'=>'Orpington', 'mp_name'=>'Johnson, Joseph (Conservative)'));
        Constituency::create(array('constituency'=>'Harrogate and Knaresborough', 'mp_name'=>'Jones, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Clwyd West', 'mp_name'=>'Jones, David (Conservative)'));
        Constituency::create(array('constituency'=>'Hyndburn', 'mp_name'=>'Jones, Graham (Labour)'));
        Constituency::create(array('constituency'=>'Warrington North', 'mp_name'=>'Jones, Helen (Labour)'));
        Constituency::create(array('constituency'=>'North Durham', 'mp_name'=>'Jones, Kevan (Labour)'));
        Constituency::create(array('constituency'=>'Nuneaton', 'mp_name'=>'Jones, Marcus (Conservative)'));
        Constituency::create(array('constituency'=>'Clwyd South', 'mp_name'=>'Jones, Susan Elan (Labour)'));
        Constituency::create(array('constituency'=>'Dulwich and West Norwood', 'mp_name'=>'Jowell, Tessa (Labour)'));
        Constituency::create(array('constituency'=>'Falkirk', 'mp_name'=>'Joyce, Eric (Independent)'));
        Constituency::create(array('constituency'=>'Manchester, Gorton', 'mp_name'=>'Kaufman, Gerald (Labour)'));
        Constituency::create(array('constituency'=>'Shrewsbury and Atcham', 'mp_name'=>'Kawczynski, Daniel (Conservative)'));
        Constituency::create(array('constituency'=>'Worsley and Eccles South', 'mp_name'=>'Keeley, Barbara (Labour)'));
        Constituency::create(array('constituency'=>'Dudley South', 'mp_name'=>'Kelly, Chris (Conservative)'));
        Constituency::create(array('constituency'=>'Leicester West', 'mp_name'=>'Kendall, Liz (Labour)'));
        Constituency::create(array('constituency'=>'Ross, Skye and Lochaber', 'mp_name'=>'Kennedy, Charles (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Tooting', 'mp_name'=>'Khan, Sadiq (Labour)'));
        Constituency::create(array('constituency'=>'Brighton, Kemptown', 'mp_name'=>'Kirby, Simon (Conservative)'));
        Constituency::create(array('constituency'=>'East Yorkshire', 'mp_name'=>'Knight, Greg (Conservative)'));
        Constituency::create(array('constituency'=>'Spelthorne', 'mp_name'=>'Kwarteng, Kwasi (Conservative)'));
        Constituency::create(array('constituency'=>'Epping Forest', 'mp_name'=>'Laing, Eleanor (Conservative)'));
        Constituency::create(array('constituency'=>'North Norfolk', 'mp_name'=>'Lamb, Norman (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Tottenham', 'mp_name'=>'Lammy, David (Labour)'));
        Constituency::create(array('constituency'=>'Milton Keynes North', 'mp_name'=>'Lancaster, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'South Cambridgeshire', 'mp_name'=>'Lansley, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Mid Derbyshire', 'mp_name'=>'Latham, Pauline (Conservative)'));
        Constituency::create(array('constituency'=>'Wansbeck', 'mp_name'=>'Lavery, Ian (Labour)'));
        Constituency::create(array('constituency'=>'Yeovil', 'mp_name'=>'Laws, David (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Edinburgh North and Leith', 'mp_name'=>'Lazarowicz, Mark (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'South Northamptonshire', 'mp_name'=>'Leadsom, Andrea (Conservative)'));
        Constituency::create(array('constituency'=>'Erewash', 'mp_name'=>'Lee, Jessica (Conservative)'));
        Constituency::create(array('constituency'=>'Bracknell', 'mp_name'=>'Lee, Phillip (Conservative)'));
        Constituency::create(array('constituency'=>'Manchester, Withington', 'mp_name'=>'Leech, John (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Stafford', 'mp_name'=>'Lefroy, Jeremy (Conservative)'));
        Constituency::create(array('constituency'=>'Gainsborough', 'mp_name'=>'Leigh, Edward (Conservative)'));
        Constituency::create(array('constituency'=>'Bristol North West', 'mp_name'=>'Leslie, Charlotte (Conservative)'));
        Constituency::create(array('constituency'=>'Nottingham East', 'mp_name'=>'Leslie, Chris (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'West Dorset', 'mp_name'=>'Letwin, Oliver (Conservative)'));
        Constituency::create(array('constituency'=>'South Shields', 'mp_name'=>'Lewell-Buck, Emma (Labour)'));
        Constituency::create(array('constituency'=>'Great Yarmouth', 'mp_name'=>'Lewis, Brandon (Conservative)'));
        Constituency::create(array('constituency'=>'Bury South', 'mp_name'=>'Lewis, Ivan (Labour)'));
        Constituency::create(array('constituency'=>'New Forest East', 'mp_name'=>'Lewis, Julian (Conservative)'));
        Constituency::create(array('constituency'=>'Bridgwater and West Somerset', 'mp_name'=>'Liddell-Grainger, Ian (Conservative)'));
        Constituency::create(array('constituency'=>'Aylesbury', 'mp_name'=>'Lidington, David (Conservative)'));
        Constituency::create(array('constituency'=>'Hitchin and Harpenden', 'mp_name'=>'Lilley, Peter (Conservative)'));
        Constituency::create(array('constituency'=>'Eastbourne', 'mp_name'=>'Lloyd, Stephen (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Dwyfor Meirionnydd', 'mp_name'=>'Llwyd, Elfyn (Plaid Cymru)'));
        Constituency::create(array('constituency'=>'Belfast East', 'mp_name'=>'Long, Naomi (Alliance)'));
        Constituency::create(array('constituency'=>'Filton and Bradley Stoke', 'mp_name'=>'Lopresti, Jack (Conservative)'));
        Constituency::create(array('constituency'=>'Woking', 'mp_name'=>'Lord, Jonathan (Conservative)'));
        Constituency::create(array('constituency'=>'East Worthing and Shoreham', 'mp_name'=>'Loughton, Tim (Conservative)'));
        Constituency::create(array('constituency'=>'Edmonton', 'mp_name'=>'Love, Andrew (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Brighton, Pavilion', 'mp_name'=>'Lucas, Caroline (Green)'));
        Constituency::create(array('constituency'=>'Wrexham', 'mp_name'=>'Lucas, Ian (Labour)'));
        Constituency::create(array('constituency'=>'Mid Worcestershire', 'mp_name'=>'Luff, Peter (Conservative)'));
        Constituency::create(array('constituency'=>'Redditch', 'mp_name'=>'Lumley, Karen (Conservative)'));
        Constituency::create(array('constituency'=>'Birmingham, Selly Oak', 'mp_name'=>'McCabe, Steve (Labour)'));
        Constituency::create(array('constituency'=>'East Kilbride, Strathaven and Lesmahagow', 'mp_name'=>'McCann, Michael (Labour)'));
        Constituency::create(array('constituency'=>'Bristol East', 'mp_name'=>'McCarthy, Kerry (Labour)'));
        Constituency::create(array('constituency'=>'Colne Valley', 'mp_name'=>'McCartney, Jason (Conservative)'));
        Constituency::create(array('constituency'=>'Lincoln', 'mp_name'=>'McCartney, Karl (Conservative)'));
        Constituency::create(array('constituency'=>'Cumbernauld, Kilsyth and Kirkintilloch East', 'mp_name'=>'McClymont, Gregg (Labour)'));
        Constituency::create(array('constituency'=>'South Antrim', 'mp_name'=>'McCrea, William (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'Mitcham and Morden', 'mp_name'=>'McDonagh, Siobhain (Labour)'));
        Constituency::create(array('constituency'=>'Middlesbrough', 'mp_name'=>'McDonald, Andy (Labour)'));
        Constituency::create(array('constituency'=>'Belfast South', 'mp_name'=>'McDonnell, Alasdair (Social Democratic & Labour Party)'));
        Constituency::create(array('constituency'=>'Hayes and Harlington', 'mp_name'=>'McDonnell, John (Labour)'));
        Constituency::create(array('constituency'=>'Wolverhampton South East', 'mp_name'=>'McFadden, Pat (Labour)'));
        Constituency::create(array('constituency'=>'Wirral South', 'mp_name'=>'McGovern, Alison (Labour)'));
        Constituency::create(array('constituency'=>'Dundee West', 'mp_name'=>'McGovern, Jim (Labour)'));
        Constituency::create(array('constituency'=>'Stirling', 'mp_name'=>'McGuire, Anne (Labour)'));
        Constituency::create(array('constituency'=>'Thirsk and Malton', 'mp_name'=>'McIntosh, Anne (Conservative)'));
        Constituency::create(array('constituency'=>'Glasgow North', 'mp_name'=>'McKechin, Ann (Labour)'));
        Constituency::create(array('constituency'=>'Inverclyde', 'mp_name'=>'McKenzie, Iain (Labour)'));
        Constituency::create(array('constituency'=>'Newcastle upon Tyne North', 'mp_name'=>'McKinnell, Catherine (Labour)'));
        Constituency::create(array('constituency'=>'Brentford and Isleworth', 'mp_name'=>'Macleod, Mary (Conservative)'));
        Constituency::create(array('constituency'=>'Derbyshire Dales', 'mp_name'=>'McLoughlin, Patrick (Conservative)'));
        Constituency::create(array('constituency'=>'Na h-Eileanan an Iar', 'mp_name'=>'MacNeil, Angus Brendan (Scottish National)'));
        Constituency::create(array('constituency'=>'Stevenage', 'mp_name'=>'McPartland, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Slough', 'mp_name'=>'Mactaggart, Fiona (Labour)'));
        Constituency::create(array('constituency'=>'Wirral West', 'mp_name'=>'McVey, Esther (Conservative)'));
        Constituency::create(array('constituency'=>'Birmingham, Perry Barr', 'mp_name'=>'Mahmood, Khalid (Labour)'));
        Constituency::create(array('constituency'=>'Birmingham, Ladywood', 'mp_name'=>'Mahmood, Shabana (Labour)'));
        Constituency::create(array('constituency'=>'St Albans', 'mp_name'=>'Main, Anne (Conservative)'));
        Constituency::create(array('constituency'=>'Feltham and Heston', 'mp_name'=>'Malhotra, Seema (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Bassetlaw', 'mp_name'=>'Mann, John (Labour)'));
        Constituency::create(array('constituency'=>'Blackpool South', 'mp_name'=>'Marsden, Gordon (Labour)'));
        Constituency::create(array('constituency'=>'Belfast West', 'mp_name'=>'Maskey, Paul (Sinn Fein)'));
        Constituency::create(array('constituency'=>'Horsham', 'mp_name'=>'Maude, Francis (Conservative)'));
        Constituency::create(array('constituency'=>'Maidenhead', 'mp_name'=>'May, Theresa (Conservative)'));
        Constituency::create(array('constituency'=>'Blackpool North and Cleveleys', 'mp_name'=>'Maynard, Paul (Conservative)'));
        Constituency::create(array('constituency'=>'Oldham West and Royton', 'mp_name'=>'Meacher, Michael (Labour)'));
        Constituency::create(array('constituency'=>'Mansfield', 'mp_name'=>'Meale, Alan (Labour)'));
        Constituency::create(array('constituency'=>'Gateshead', 'mp_name'=>'Mearns, Ian (Labour)'));
        Constituency::create(array('constituency'=>'Fylde', 'mp_name'=>'Menzies, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Newark', 'mp_name'=>'Mercer, Patrick (Independent)'));
        Constituency::create(array('constituency'=>'South Basildon and East Thurrock', 'mp_name'=>'Metcalfe, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Doncaster North', 'mp_name'=>'Miliband, Edward (Labour)'));
        Constituency::create(array('constituency'=>'Ellesmere Port and Neston', 'mp_name'=>'Miller, Andrew (Labour)'));
        Constituency::create(array('constituency'=>'Basingstoke', 'mp_name'=>'Miller, Maria (Conservative)'));
        Constituency::create(array('constituency'=>'Amber Valley', 'mp_name'=>'Mills, Nigel (Conservative)'));
        Constituency::create(array('constituency'=>'Guildford', 'mp_name'=>'Milton, Anne (Conservative)'));
        Constituency::create(array('constituency'=>'Sutton Coldfield', 'mp_name'=>'Mitchell, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Great Grimsby', 'mp_name'=>'Mitchell, Austin (Labour)'));
        Constituency::create(array('constituency'=>'Mid Ulster', 'mp_name'=>'Molloy, Francie (Sinn Fein)'));
        Constituency::create(array('constituency'=>'Bridgend', 'mp_name'=>'Moon, Madeleine (Labour)'));
        Constituency::create(array('constituency'=>'Berwickshire, Roxburgh and Selkirk', 'mp_name'=>'Moore, Michael (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Portsmouth North', 'mp_name'=>'Mordaunt, Penny (Conservative)'));
        Constituency::create(array('constituency'=>'Newport East', 'mp_name'=>'Morden, Jessica (Labour)'));
        Constituency::create(array('constituency'=>'Loughborough', 'mp_name'=>'Morgan, Nicky (Conservative)'));
        Constituency::create(array('constituency'=>'Livingston', 'mp_name'=>'Morrice, Graeme (Labour)'));
        Constituency::create(array('constituency'=>'Newton Abbot', 'mp_name'=>'Morris, Anne Marie (Conservative)'));
        Constituency::create(array('constituency'=>'Morecambe and Lunesdale', 'mp_name'=>'Morris, David (Conservative)'));
        Constituency::create(array('constituency'=>'Easington', 'mp_name'=>'Morris, Grahame M. (Labour)'));
        Constituency::create(array('constituency'=>'Halesowen and Rowley Regis', 'mp_name'=>'Morris, James (Conservative)'));
        Constituency::create(array('constituency'=>'City of Chester', 'mp_name'=>'Mosley, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Warrington South', 'mp_name'=>'Mowat, David (Conservative)'));
        Constituency::create(array('constituency'=>'Leeds East', 'mp_name'=>'Mudie, George (Labour)'));
        Constituency::create(array('constituency'=>'Leeds North West', 'mp_name'=>'Mulholland, Greg (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Dumfriesshire, Clydesdale and Tweeddale', 'mp_name'=>'Mundell, David (Conservative)'));
        Constituency::create(array('constituency'=>'Sheffield, Heeley', 'mp_name'=>'Munn, Meg (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Wells', 'mp_name'=>'Munt, Tessa (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Newry and Armagh', 'mp_name'=>'Murphy, Conor (Sinn Fein)'));
        Constituency::create(array('constituency'=>'East Renfrewshire', 'mp_name'=>'Murphy, Jim (Labour)'));
        Constituency::create(array('constituency'=>'Torfaen', 'mp_name'=>'Murphy, Paul (Labour)'));
        Constituency::create(array('constituency'=>'Edinburgh South', 'mp_name'=>'Murray, Ian (Labour)'));
        Constituency::create(array('constituency'=>'South East Cornwall', 'mp_name'=>'Murray, Sheryll (Conservative)'));
        Constituency::create(array('constituency'=>'South West Wiltshire', 'mp_name'=>'Murrison, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Wigan', 'mp_name'=>'Nandy, Lisa (Labour)'));
        Constituency::create(array('constituency'=>'Airdrie and Shotts', 'mp_name'=>'Nash, Pamela (Labour)'));
        Constituency::create(array('constituency'=>'Bromley and Chislehurst', 'mp_name'=>'Neill, Robert (Conservative)'));
        Constituency::create(array('constituency'=>'Braintree', 'mp_name'=>'Newmark, Brooks (Conservative)'));
        Constituency::create(array('constituency'=>'Truro and Falmouth', 'mp_name'=>'Newton, Sarah (Conservative)'));
        Constituency::create(array('constituency'=>'Romsey and Southampton North', 'mp_name'=>'Nokes, Caroline (Conservative)'));
        Constituency::create(array('constituency'=>'Hereford and South Herefordshire', 'mp_name'=>'Norman, Jesse (Conservative)'));
        Constituency::create(array('constituency'=>'Bury North', 'mp_name'=>'Nuttall, David (Conservative)'));
        Constituency::create(array('constituency'=>'Eddisbury', 'mp_name'=>'O\'Brien, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'East Lothian', 'mp_name'=>'O\'Donnell, Fiona (Labour)'));
        Constituency::create(array('constituency'=>'Hendon', 'mp_name'=>'Offord, Matthew (Conservative)'));
        Constituency::create(array('constituency'=>'Lancaster and Fleetwood', 'mp_name'=>'Ollerenshaw, Eric (Conservative)'));
        Constituency::create(array('constituency'=>'Newcastle upon Tyne Central', 'mp_name'=>'Onwurah, Chi (Labour)'));
        Constituency::create(array('constituency'=>'Hexham', 'mp_name'=>'Opperman, Guy (Conservative)'));
        Constituency::create(array('constituency'=>'Tatton', 'mp_name'=>'Osborne, George (Conservative)'));
        Constituency::create(array('constituency'=>'Ayr, Carrick and Cumnock', 'mp_name'=>'Osborne, Sandra (Labour)'));
        Constituency::create(array('constituency'=>'Croydon South', 'mp_name'=>'Ottaway, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'Ynys Môn', 'mp_name'=>'Owen, Albert (Labour)'));
        Constituency::create(array('constituency'=>'South East Cambridgeshire', 'mp_name'=>'Paice, James (Conservative)'));
        Constituency::create(array('constituency'=>'North Antrim', 'mp_name'=>'Paisley, Ian (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'Tiverton and Honiton', 'mp_name'=>'Parish, Neil (Conservative)'));
        Constituency::create(array('constituency'=>'Witham', 'mp_name'=>'Patel, Priti (Conservative)'));
        Constituency::create(array('constituency'=>'North Shropshire', 'mp_name'=>'Paterson, Owen (Conservative)'));
        Constituency::create(array('constituency'=>'Rugby', 'mp_name'=>'Pawsey, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Erith and Thamesmead', 'mp_name'=>'Pearce, Teresa (Labour)'));
        Constituency::create(array('constituency'=>'Hemel Hempstead', 'mp_name'=>'Penning, Mike (Conservative)'));
        Constituency::create(array('constituency'=>'Weston-super-Mare', 'mp_name'=>'Penrose, John (Conservative)'));
        Constituency::create(array('constituency'=>'Brigg and Goole', 'mp_name'=>'Percy, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Chesterfield', 'mp_name'=>'Perkins, Toby (Labour)'));
        Constituency::create(array('constituency'=>'Devizes', 'mp_name'=>'Perry, Claire (Conservative)'));
        Constituency::create(array('constituency'=>'Sleaford and North Hykeham', 'mp_name'=>'Phillips, Stephen (Conservative)'));
        Constituency::create(array('constituency'=>'Houghton and Sunderland South', 'mp_name'=>'Phillipson, Bridget (Labour)'));
        Constituency::create(array('constituency'=>'Brentwood and Ongar', 'mp_name'=>'Pickles, Eric (Conservative)'));
        Constituency::create(array('constituency'=>'Tamworth', 'mp_name'=>'Pincher, Christopher (Conservative)'));
        Constituency::create(array('constituency'=>'Central Suffolk and North Ipswich', 'mp_name'=>'Poulter, Daniel (Conservative)'));
        Constituency::create(array('constituency'=>'Ealing North', 'mp_name'=>'Pound, Stephen (Labour)'));
        Constituency::create(array('constituency'=>'Manchester Central', 'mp_name'=>'Powell, Lucy (Labour)'));
        Constituency::create(array('constituency'=>'Bristol South', 'mp_name'=>'Primarolo, Dawn (Labour)'));
        Constituency::create(array('constituency'=>'Hertford and Stortford', 'mp_name'=>'Prisk, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'The Wrekin', 'mp_name'=>'Pritchard, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Southport', 'mp_name'=>'Pugh, John (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Bolton South East', 'mp_name'=>'Qureshi, Yasmin (Labour)'));
        Constituency::create(array('constituency'=>'Esher and Walton', 'mp_name'=>'Raab, Dominic (Conservative)'));
        Constituency::create(array('constituency'=>'Uxbridge and South Ruislip', 'mp_name'=>'Randall, John (Conservative)'));
        Constituency::create(array('constituency'=>'Greenwich and Woolwich', 'mp_name'=>'Raynsford, Nick (Labour)'));
        Constituency::create(array('constituency'=>'Rochester and Strood', 'mp_name'=>'Reckless, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Wokingham', 'mp_name'=>'Redwood, John (Conservative)'));
        Constituency::create(array('constituency'=>'Copeland', 'mp_name'=>'Reed, Jamie (Labour)'));
        Constituency::create(array('constituency'=>'Croydon North', 'mp_name'=>'Reed, Steve (Labour)'));
        Constituency::create(array('constituency'=>'North East Somerset', 'mp_name'=>'Rees-Mogg, Jacob (Conservative)'));
        Constituency::create(array('constituency'=>'Dewsbury', 'mp_name'=>'Reevell, Simon (Conservative)'));
        Constituency::create(array('constituency'=>'Leeds West', 'mp_name'=>'Reeves, Rachel (Labour)'));
        Constituency::create(array('constituency'=>'Argyll and Bute', 'mp_name'=>'Reid, Alan (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Wolverhampton North East', 'mp_name'=>'Reynolds, Emma (Labour)'));
        Constituency::create(array('constituency'=>'Stalybridge and Hyde', 'mp_name'=>'Reynolds, Jonathan (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Kensington', 'mp_name'=>'Rifkind, Malcolm (Conservative)'));
        Constituency::create(array('constituency'=>'Halifax', 'mp_name'=>'Riordan, Linda (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'South Down', 'mp_name'=>'Ritchie, Margaret (Social Democratic & Labour Party)'));
        Constituency::create(array('constituency'=>'South Leicestershire', 'mp_name'=>'Robathan, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Moray', 'mp_name'=>'Robertson, Angus (Scottish National)'));
        Constituency::create(array('constituency'=>'Faversham and Mid Kent', 'mp_name'=>'Robertson, Hugh (Conservative)'));
        Constituency::create(array('constituency'=>'Glasgow North West', 'mp_name'=>'Robertson, John (Labour)'));
        Constituency::create(array('constituency'=>'Tewkesbury', 'mp_name'=>'Robertson, Laurence (Conservative)'));
        Constituency::create(array('constituency'=>'Coventry North West', 'mp_name'=>'Robinson, Geoffrey (Labour)'));
        Constituency::create(array('constituency'=>'North Cornwall', 'mp_name'=>'Rogerson, Dan (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Romford', 'mp_name'=>'Rosindell, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Liverpool, Walton', 'mp_name'=>'Rotheram, Steve (Labour)'));
        Constituency::create(array('constituency'=>'Motherwell and Wishaw', 'mp_name'=>'Roy, Frank (Labour)'));
        Constituency::create(array('constituency'=>'Glenrothes', 'mp_name'=>'Roy, Lindsay (Labour)'));
        Constituency::create(array('constituency'=>'Vale of Clwyd', 'mp_name'=>'Ruane, Chris (Labour)'));
        Constituency::create(array('constituency'=>'Hastings and Rye', 'mp_name'=>'Rudd, Amber (Conservative)'));
        Constituency::create(array('constituency'=>'Lewisham, Deptford', 'mp_name'=>'Ruddock, Dame Joan (Labour)'));
        Constituency::create(array('constituency'=>'Bury St Edmunds', 'mp_name'=>'Ruffley, David (Conservative)'));
        Constituency::create(array('constituency'=>'Colchester', 'mp_name'=>'Russell, Bob (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Macclesfield', 'mp_name'=>'Rutley, David (Conservative)'));
        Constituency::create(array('constituency'=>'Torbay', 'mp_name'=>'Sanders, Adrian (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'South Thanet', 'mp_name'=>'Sandys, Laura (Conservative)'));
        Constituency::create(array('constituency'=>'Glasgow Central', 'mp_name'=>'Sarwar, Anas (Labour)'));
        Constituency::create(array('constituency'=>'Corby', 'mp_name'=>'Sawford, Andy (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Ilford North', 'mp_name'=>'Scott, Lee (Conservative)'));
        Constituency::create(array('constituency'=>'Plymouth, Moor View', 'mp_name'=>'Seabeck, Alison (Labour)'));
        Constituency::create(array('constituency'=>'South West Bedfordshire', 'mp_name'=>'Selous, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Strangford', 'mp_name'=>'Shannon, Jim (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'Welwyn Hatfield', 'mp_name'=>'Shapps, Grant (Conservative)'));
        Constituency::create(array('constituency'=>'Reading West', 'mp_name'=>'Sharma, Alok (Conservative)'));
        Constituency::create(array('constituency'=>'Ealing, Southall', 'mp_name'=>'Sharma, Virendra (Labour)'));
        Constituency::create(array('constituency'=>'Huddersfield', 'mp_name'=>'Sheerman, Barry (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Elmet and Rothwell', 'mp_name'=>'Shelbrooke, Alec (Conservative)'));
        Constituency::create(array('constituency'=>'Aldridge-Brownhills', 'mp_name'=>'Shepherd, Richard (Conservative)'));
        Constituency::create(array('constituency'=>'Paisley and Renfrewshire North', 'mp_name'=>'Sheridan, Jim (Labour)'));
        Constituency::create(array('constituency'=>'Luton South', 'mp_name'=>'Shuker, Gavin (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Boston and Skegness', 'mp_name'=>'Simmonds, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Upper Bann', 'mp_name'=>'Simpson, David (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'Broadland', 'mp_name'=>'Simpson, Keith (Conservative)'));
        Constituency::create(array('constituency'=>'Kingswood', 'mp_name'=>'Skidmore, Chris (Conservative)'));
        Constituency::create(array('constituency'=>'Bolsover', 'mp_name'=>'Skinner, Dennis (Labour)'));
        Constituency::create(array('constituency'=>'Hammersmith', 'mp_name'=>'Slaughter, Andy (Labour)'));
        Constituency::create(array('constituency'=>'Oxford East', 'mp_name'=>'Smith, Andrew (Labour)'));
        Constituency::create(array('constituency'=>'Penistone and Stocksbridge', 'mp_name'=>'Smith, Angela (Labour)'));
        Constituency::create(array('constituency'=>'Norwich North', 'mp_name'=>'Smith, Chloe (Conservative)'));
        Constituency::create(array('constituency'=>'Crawley', 'mp_name'=>'Smith, Henry (Conservative)'));
        Constituency::create(array('constituency'=>'Skipton and Ripon', 'mp_name'=>'Smith, Julian (Conservative)'));
        Constituency::create(array('constituency'=>'Blaenau Gwent', 'mp_name'=>'Smith, Nick (Labour)'));
        Constituency::create(array('constituency'=>'Pontypridd', 'mp_name'=>'Smith, Owen (Labour)'));
        Constituency::create(array('constituency'=>'West Aberdeenshire and Kincardine', 'mp_name'=>'Smith, Robert (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Mid Sussex', 'mp_name'=>'Soames, Nicholas (Conservative)'));
        Constituency::create(array('constituency'=>'Broxtowe', 'mp_name'=>'Soubry, Anna (Conservative)'));
        Constituency::create(array('constituency'=>'Warley', 'mp_name'=>'Spellar, John (Labour)'));
        Constituency::create(array('constituency'=>'Meriden', 'mp_name'=>'Spelman, Caroline (Conservative)'));
        Constituency::create(array('constituency'=>'Sherwood', 'mp_name'=>'Spencer, Mark (Conservative)'));
        Constituency::create(array('constituency'=>'Tonbridge and Malling', 'mp_name'=>'Stanley, John (Conservative)'));
        Constituency::create(array('constituency'=>'Pendle', 'mp_name'=>'Stephenson, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Carlisle', 'mp_name'=>'Stevenson, John (Conservative)'));
        Constituency::create(array('constituency'=>'Beckenham', 'mp_name'=>'Stewart, Bob (Conservative)'));
        Constituency::create(array('constituency'=>'Milton Keynes South', 'mp_name'=>'Stewart, Iain (Conservative)'));
        Constituency::create(array('constituency'=>'Penrith and The Border', 'mp_name'=>'Stewart, Rory (Conservative)'));
        Constituency::create(array('constituency'=>'Blackburn', 'mp_name'=>'Straw, Jack (Labour)'));
        Constituency::create(array('constituency'=>'South West Devon', 'mp_name'=>'Streeter, Gary (Conservative)'));
        Constituency::create(array('constituency'=>'Central Devon', 'mp_name'=>'Stride, Mel (Conservative)'));
        Constituency::create(array('constituency'=>'Blackley and Broughton', 'mp_name'=>'Stringer, Graham (Labour)'));
        Constituency::create(array('constituency'=>'Birmingham, Edgbaston', 'mp_name'=>'Stuart, Gisela (Labour)'));
        Constituency::create(array('constituency'=>'Beverley and Holderness', 'mp_name'=>'Stuart, Graham (Conservative)'));
        Constituency::create(array('constituency'=>'Hazel Grove', 'mp_name'=>'Stunell, Andrew (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'York Outer', 'mp_name'=>'Sturdy, Julian (Conservative)'));
        Constituency::create(array('constituency'=>'Bradford South', 'mp_name'=>'Sutcliffe, Gerry (Labour)'));
        Constituency::create(array('constituency'=>'Redcar', 'mp_name'=>'Swales, Ian (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'New Forest West', 'mp_name'=>'Swayne, Desmond (Conservative)'));
        Constituency::create(array('constituency'=>'East Dunbartonshire', 'mp_name'=>'Swinson, Jo (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'East Devon', 'mp_name'=>'Swire, Hugo (Conservative)'));
        Constituency::create(array('constituency'=>'Poole', 'mp_name'=>'Syms, Robert (Conservative)'));
        Constituency::create(array('constituency'=>'Alyn and Deeside', 'mp_name'=>'Tami, Mark (Labour)'));
        Constituency::create(array('constituency'=>'Louth and Horncastle', 'mp_name'=>'Tapsell, Peter (Conservative)'));
        Constituency::create(array('constituency'=>'Brent Central', 'mp_name'=>'Teather, Sarah (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Harrow West', 'mp_name'=>'Thomas, Gareth (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Islington South and Finsbury', 'mp_name'=>'Thornberry, Emily (Labour)'));
        Constituency::create(array('constituency'=>'Eastleigh', 'mp_name'=>'Thornton, Mike (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Caithness, Sutherland and Easter Ross', 'mp_name'=>'Thurso, John (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'East Ham', 'mp_name'=>'Timms, Stephen (Labour)'));
        Constituency::create(array('constituency'=>'Crewe and Nantwich', 'mp_name'=>'Timpson, Edward (Conservative)'));
        Constituency::create(array('constituency'=>'North Swindon', 'mp_name'=>'Tomlinson, Justin (Conservative)'));
        Constituency::create(array('constituency'=>'Bosworth', 'mp_name'=>'Tredinnick, David (Conservative)'));
        Constituency::create(array('constituency'=>'Hemsworth', 'mp_name'=>'Trickett, Jon (Labour)'));
        Constituency::create(array('constituency'=>'South West Norfolk', 'mp_name'=>'Truss, Elizabeth (Conservative)'));
        Constituency::create(array('constituency'=>'Isle of Wight', 'mp_name'=>'Turner, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Kingston upon Hull East', 'mp_name'=>'Turner, Karl (Labour)'));
        Constituency::create(array('constituency'=>'Halton', 'mp_name'=>'Twigg, Derek (Labour)'));
        Constituency::create(array('constituency'=>'Liverpool, West Derby', 'mp_name'=>'Twigg, Stephen (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'Chichester', 'mp_name'=>'Tyrie, Andrew (Conservative)'));
        Constituency::create(array('constituency'=>'Streatham', 'mp_name'=>'Umunna, Chuka (Labour)'));
        Constituency::create(array('constituency'=>'Wolverhampton South West', 'mp_name'=>'Uppal, Paul (Conservative)'));
        Constituency::create(array('constituency'=>'Wantage', 'mp_name'=>'Vaizey, Edward (Conservative)'));
        Constituency::create(array('constituency'=>'North West Cambridgeshire', 'mp_name'=>'Vara, Shailesh (Conservative)'));
        Constituency::create(array('constituency'=>'Leicester East', 'mp_name'=>'Vaz, Keith (Labour)'));
        Constituency::create(array('constituency'=>'Walsall South', 'mp_name'=>'Vaz, Valerie (Labour)'));
        Constituency::create(array('constituency'=>'Cleethorpes', 'mp_name'=>'Vickers, Martin (Conservative)'));
        Constituency::create(array('constituency'=>'Chipping Barnet', 'mp_name'=>'Villiers, Theresa (Conservative)'));
        Constituency::create(array('constituency'=>'Broxbourne', 'mp_name'=>'Walker, Charles (Conservative)'));
        Constituency::create(array('constituency'=>'Worcester', 'mp_name'=>'Walker, Robin (Conservative)'));
        Constituency::create(array('constituency'=>'Wyre and Preston North', 'mp_name'=>'Wallace, Ben (Conservative)'));
        Constituency::create(array('constituency'=>'Stoke-on-Trent North', 'mp_name'=>'Walley, Joan (Labour)'));
        Constituency::create(array('constituency'=>'North Dorset', 'mp_name'=>'Walter, Robert (Conservative)'));
        Constituency::create(array('constituency'=>'Bradford East', 'mp_name'=>'Ward, David (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Hornchurch and Upminster', 'mp_name'=>'Watkinson, Angela (Conservative)'));
        Constituency::create(array('constituency'=>'West Bromwich East', 'mp_name'=>'Watson, Tom (Labour)'));
        Constituency::create(array('constituency'=>'St Helens North', 'mp_name'=>'Watts, Dave (Labour)'));
        Constituency::create(array('constituency'=>'Hove', 'mp_name'=>'Weatherley, Mike (Conservative)'));
        Constituency::create(array('constituency'=>'Thornbury and Yate', 'mp_name'=>'Webb, Steve (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Angus', 'mp_name'=>'Weir, Mike (Scottish National)'));
        Constituency::create(array('constituency'=>'Stockton South', 'mp_name'=>'Wharton, James (Conservative)'));
        Constituency::create(array('constituency'=>'South Derbyshire', 'mp_name'=>'Wheeler, Heather (Conservative)'));
        Constituency::create(array('constituency'=>'Warwick and Leamington', 'mp_name'=>'White, Chris (Conservative)'));
        Constituency::create(array('constituency'=>'Banff and Buchan', 'mp_name'=>'Whiteford, Eilidh (Scottish National)'));
        Constituency::create(array('constituency'=>'Southampton, Test', 'mp_name'=>'Whitehead, Alan (Labour)'));
        Constituency::create(array('constituency'=>'Calder Valley', 'mp_name'=>'Whittaker, Craig (Conservative)'));
        Constituency::create(array('constituency'=>'Maldon', 'mp_name'=>'Whittingdale, John (Conservative)'));
        Constituency::create(array('constituency'=>'North Herefordshire', 'mp_name'=>'Wiggin, Bill (Conservative)'));
        Constituency::create(array('constituency'=>'Havant', 'mp_name'=>'Willetts, David (Conservative)'));
        Constituency::create(array('constituency'=>'Arfon', 'mp_name'=>'Williams, Hywel (Plaid Cymru)'));
        Constituency::create(array('constituency'=>'Ceredigion', 'mp_name'=>'Williams, Mark (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Brecon and Radnorshire', 'mp_name'=>'Williams, Roger (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Bristol West', 'mp_name'=>'Williams, Stephen (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Derby North', 'mp_name'=>'Williamson, Chris (Labour)'));
        Constituency::create(array('constituency'=>'South Staffordshire', 'mp_name'=>'Williamson, Gavin (Conservative)'));
        Constituency::create(array('constituency'=>'Cardiff Central', 'mp_name'=>'Willott, Jenny (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'Sedgefield', 'mp_name'=>'Wilson, Phil (Labour)'));
        Constituency::create(array('constituency'=>'Reading East', 'mp_name'=>'Wilson, Rob (Conservative)'));
        Constituency::create(array('constituency'=>'East Antrim', 'mp_name'=>'Wilson, Sammy (Democratic Unionist)'));
        Constituency::create(array('constituency'=>'Walsall North', 'mp_name'=>'Winnick, David (Labour)'));
        Constituency::create(array('constituency'=>'Doncaster Central', 'mp_name'=>'Winterton, Rosie (Labour)'));
        Constituency::create(array('constituency'=>'Perth and North Perthshire', 'mp_name'=>'Wishart, Pete (Scottish National)'));
        Constituency::create(array('constituency'=>'Totnes', 'mp_name'=>'Wollaston, Sarah (Conservative)'));
        Constituency::create(array('constituency'=>'Batley and Spen', 'mp_name'=>'Wood, Mike (Labour)'));
        Constituency::create(array('constituency'=>'Barrow and Furness', 'mp_name'=>'Woodcock, John (Labour (Co-op))'));
        Constituency::create(array('constituency'=>'St Helens South and Whiston', 'mp_name'=>'Woodward, Shaun (Labour)'));
        Constituency::create(array('constituency'=>'Telford', 'mp_name'=>'Wright, David (Labour)'));
        Constituency::create(array('constituency'=>'Hartlepool', 'mp_name'=>'Wright, Iain (Labour)'));
        Constituency::create(array('constituency'=>'Kenilworth and Southam', 'mp_name'=>'Wright, Jeremy (Conservative)'));
        Constituency::create(array('constituency'=>'Norwich South', 'mp_name'=>'Wright, Simon (Liberal Democrat)'));
        Constituency::create(array('constituency'=>'South Suffolk', 'mp_name'=>'Yeo, Tim (Conservative)'));
        Constituency::create(array('constituency'=>'North West Hampshire', 'mp_name'=>'Young, George (Conservative)'));
        Constituency::create(array('constituency'=>'Stratford-on-Avon', 'mp_name'=>'Zahawi, Nadhim (Conservative)'));
    }

}