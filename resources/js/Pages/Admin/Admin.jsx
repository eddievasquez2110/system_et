import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faFilePrescription, faUserGroup} from '@fortawesome/free-solid-svg-icons';

export default function Admin({auth,solicitud,user,enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre}) {
    const eneroTotal = enero.length;
    const febreroTotal = febrero.length;
    const marzoTotal = marzo.length;
    const abrilTotal = abril.length;
    const mayoTotal = mayo.length;
    const junioTotal = junio.length;
    const julioTotal = julio.length;
    const agostoTotal = agosto.length;
    const septiembreTotal = septiembre.length;
    const octubreTotal = octubre.length;
    const noviembreTotal = noviembre.length;
    const diciembreTotal = diciembre.length;
    const totalUser = user.length;
    const totalSoli = solicitud.length;
    const pendiente = solicitud.filter((val) => val.Estado_Solicitud=="Pendiente").length;
    const aceptado = solicitud.filter((val) => val.Estado_Solicitud=="Aceptado").length;
    const rechazado = solicitud.filter((val) => val.Estado_Solicitud=="Rechazado").length;
   
    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
            <div className='flex flex-col'>
                <div className='flex flex-wrap justify-center mt-8 gap-4 pb-5'>
                    <div>
                        <DashCircle
                        p={pendiente}
                        a={aceptado}
                        r={rechazado}
                        ></DashCircle>
                    </div>
                    
                    <div className='space-y-4 justify-center'>
                    <div className='w-5/5'>
                        <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
                        <h2>Total de Solicitudes</h2>
                        </div>
                        <div className='flex bg-white p-10 text-center text-lg space-x-2 '>
                        <FontAwesomeIcon icon={faFilePrescription} className='ml-2 pb-5 h-8 w-8 text-green-600 '></FontAwesomeIcon><strong>  {totalSoli} </strong> <p>Solicitudes</p>
                        </div> 
                    </div>
                    <div className='w-5/5'>
                        <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
                        <h2>Total Usuarios</h2>
                        </div>
                        <div className='flex bg-white p-10 text-center text-lg space-x-3'>
                            <FontAwesomeIcon icon={faUserGroup} className='ml-2 pb-5 h-8 w-8 text-green-600'></FontAwesomeIcon><strong>  {totalUser} </strong> <p>Usuarios</p>
                        </div> 
                    </div>
                    </div>
                    <div className='w-full md:flex md:w-80 '>
                        <DashBar
                        e={eneroTotal}
                        f={febreroTotal}
                        m={marzoTotal}
                        a={abrilTotal}
                        ma={mayoTotal}
                        j={junioTotal}
                        ju={julioTotal}
                        ag={agostoTotal}
                        s={septiembreTotal}
                        o={octubreTotal}
                        n={noviembreTotal}
                        d={diciembreTotal}
                        ></DashBar>
                    </div>
                    
                </div>
            </div>
        </Navbar>
    );
}