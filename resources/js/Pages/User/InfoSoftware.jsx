import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import InfoSoftwares from '@/Components/InfoSoftwares';
import { faPlusCircle} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

const InfoSoftware = ({auth, infoSoftwares}) => {
    
    return (

        <AuthenticatedLayout auth={auth}>
        <Head title="Softwares" />
            <div className='flex mt-5 h-20 bg-gradient-to-r from-slate-100 to-slate-200 justify-center place-items-center gap-10'>
                <h1 className='text-green-600 text-lg'><strong>LISTA DE SOFTWARES</strong></h1>

                <Link
                    className="flex p-4 py-2 text-green-500 bg-transparent border border-green-500 rounded-md focus:outline-none gap-4"
                        href={route("d.usersoftwares.create")}
                    >
                    <FontAwesomeIcon class={'h-5 w-5'} icon={faPlusCircle}></FontAwesomeIcon> 
                    <label className='hidden md:block'>Agregar nuevo</label>
                </Link>
            </div>
            
            <div className="wrapper flex flex-wrap items-center justify-center gap-5 mt-8">
                {
                    infoSoftwares.map(infoSoftware =>
                        <InfoSoftwares key={infoSoftware.ID_Software} infoSoftware={infoSoftware}/>
                        )
                }              
            </div>
        </AuthenticatedLayout>
    );
    
}

export default InfoSoftware;
