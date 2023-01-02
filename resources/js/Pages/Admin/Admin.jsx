import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faFilePrescription, faUserGroup} from '@fortawesome/free-solid-svg-icons';

export default function Admin({auth,solicitud,user,mes}) {
    const mesTotal = mes.length; 
    const totalUser = user.length;
    const totalSoli = solicitud.length;
    const pendiente = solicitud.filter((val) => val.Estado_Solicitud=="Pendiente").length;
    const aceptado = solicitud.filter((val) => val.Estado_Solicitud=="Aceptado").length;
    const rechazado = solicitud.filter((val) => val.Estado_Solicitud=="Rechazado").length;
   
    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
            <div className='flex flex-col'>
                <div className='wrapper flex flex-wrap justify-center mt-8 gap-4 pb-5'>
                    <div>
                        <DashCircle
                        p={pendiente}
                        a={aceptado}
                        r={rechazado}
                        ></DashCircle>
                    </div>
                    
                    <div className='space-y-10 justify-center'>
                    <div className='w-80'>
                        <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
                        <h2>Total de Solicitudes</h2>
                        </div>
                        <div className='flex bg-white p-10 text-center text-lg space-x-3 '>
                        <FontAwesomeIcon icon={faFilePrescription} className='ml-12 h-8 w-8 text-green-600 '></FontAwesomeIcon><strong>  {totalSoli} </strong> <p>Solicitudes</p>
                        </div> 
                    </div>
                    <div className='w-80'>
                        <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
                        <h2>Total Usuarios</h2>
                        </div>
                        <div className='flex bg-white p-10 text-center text-lg space-x-3'>
                            <FontAwesomeIcon icon={faUserGroup} className='ml-12 h-8 w-8 text-green-600'></FontAwesomeIcon><strong>  {totalUser} </strong> <p>Usuarios</p>
                        </div> 
                    </div>
                    </div>
                    <div className='w-full md:flex md:w-80 '>
                        <DashBar
                        m={mesTotal}
                        ></DashBar>
                    </div>
                    
                </div>
            </div>
        </Navbar>
    );
}