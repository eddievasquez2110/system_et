import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import InfoSoftwares from '@/Components/InfoSoftwares';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';

const InfoSoftware = ({auth, infoSoftwares}) => {
    
    return (
        <>
        {auth.user.ID_Rol == 1 ?
            
            <NavbarSAdmin auth={auth}>
            <Head title="Softwares" />
                <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SOFTWARES</div>
                    <div className="wrapper flex flex-wrap items-center justify-center gap-5 mt-8 p-10">
                        {
                            infoSoftwares.map(infoSoftware =>
                                <InfoSoftwares key={infoSoftware.ID_Software} infoSoftware={infoSoftware}/>
                                )
                        }              
                    </div>
            </NavbarSAdmin>
            : auth.user.ID_Rol == 3 ?
                <AuthenticatedLayout auth={auth}>
                <Head title="Softwares" />
                <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SOFTWARES</div>
                    <div className="wrapper flex flex-wrap items-center justify-center gap-5 mt-8">
                        {
                            infoSoftwares.map(infoSoftware =>
                                <InfoSoftwares key={infoSoftware.ID_Software} infoSoftware={infoSoftware}/>
                                )
                        }              
                    </div>
                </AuthenticatedLayout>
            :<></>
            
        }
        </>
    );
    
}

export default InfoSoftware;
