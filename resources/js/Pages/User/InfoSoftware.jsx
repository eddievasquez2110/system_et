import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import InfoSoftwares from '@/Components/InfoSoftwares';

const InfoSoftware = ({auth, infoSoftwares}) => {
    // console.log(auth)
    // console.log(auth.user.id)
    console.log(infoSoftwares)
    return (
        <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
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
