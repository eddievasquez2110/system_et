import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';

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
                <div className='w-80'>
                        <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
                        <h2>Total de Solicitudes</h2>
                        </div>
                        <div className='bg-white p-4 text-center'>
                            {totalSoli}
                        </div> 
                    </div>
                    <div className='w-80'>
                        <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
                        <h2>Total Usuarios</h2>
                        </div>
                        <div className='bg-white p-4 text-center'>
                            {totalUser}
                        </div> 
                    </div>
                    <DashCircle
                    p={pendiente}
                    a={aceptado}
                    r={rechazado}
                    ></DashCircle>
                    <div className='flex place-content-around'>
                        <DashBar
                        m={mesTotal}
                        ></DashBar>
                    </div>
                    
                </div>
            </div>
        </Navbar>
    );
}