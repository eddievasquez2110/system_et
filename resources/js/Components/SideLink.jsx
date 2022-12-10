import React from 'react';
import { Link } from '@inertiajs/inertia-react';

export default function SideLink({ href, active, children }) {
    return (
        <Link
            href={href}
            className={
                active
                    ? 'flex items-center justify-center p-2 text-base font-normal text-green-700 bg-green-50 rounded-lg '
                    : 'flex items-center justify-center p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 transition'
            }
        >
            {children}
        </Link>
    );
}
